<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\CitaResource;
use App\Models\Cita;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction as ActionsDeleteAction;
use Filament\Actions\EditAction as ActionsEditAction;
use Filament\Actions\ViewAction as ActionsViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Widgets\Widget;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Illuminate\Database\Eloquent\Model;
use Saade\FilamentFullCalendar\Actions\CreateAction;
use Saade\FilamentFullCalendar\Actions\DeleteAction;
use Saade\FilamentFullCalendar\Actions\EditAction;
use Saade\FilamentFullCalendar\Actions\ViewAction;

class CalendarWidget extends FullCalendarWidget
{
    public Model | string | null $model = Cita::class;

    public function fetchEvents(array $fetchInfo): array
    {
        
        return Cita::query()
            ->with('estudio')
            ->where('start_at', '>=', $fetchInfo['start'])
            ->where('end_at', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn (Cita $event) => [
                    'id' => $event->id, 
                    // 'title' => $event->estudio->name,
                    'title' => $event->user->name,
                    'start' => $event->start_at,
                    'end' => $event->end_at,
                    // 'url' => CitaResource::getUrl(name: 'edit', parameters: ['record' => $event]),
                    // 'shouldOpenUrlInNewTab' => false
                ]
            )
            ->all();
    }

    public function getFormSchema(): array
    {
        return [
           Select::make('user_id')
           ->relationship('user', 'id'),
           Select::make('estudio_id')
           ->relationship('estudio', 'name'),
            TextInput::make('description'),
            Grid::make()
                ->schema([
                    DateTimePicker::make('start_at'),
                    DateTimePicker::make('end_at'),
                ]),
            ];
    }

    protected function headerActions(): array
    {
        return [
            // CreateAction::make()
            // ->label('Nueva cita')
        ];
    }

    protected function modalActions(): array
 {
     return [
        CreateAction::make()
        ->mountUsing(
            function (Form $form, array $arguments) {
                $form->fill([
                    'start_at' => $arguments['start'] ?? null,
                    'end_at' => $arguments['end'] ?? null
                ]);
            }
        ),

         EditAction::make()
             ->mountUsing(
                 function (Cita $record, Form $form, array $arguments) {
                     $form->fill([
                         'user_id' => $record->user_id,
                         'estudio_id' => $record->estudio_id,
                         'description' => $record->description,
                         'start_at' => $arguments['event']['start'] ?? $record->start_at,
                         'end_at' => $arguments['event']['end'] ?? $record->end_at
                     ]);
                 }
             ),
         DeleteAction::make(),
     ];
 }

 public function eventDidMount(): string
{
    return <<<JS
        function({ event, timeText, isStart, isEnd, isMirror, isPast, isFuture, isToday, el, view }){
            el.setAttribute("x-tooltip", "tooltip");
            el.setAttribute("x-data", "{ tooltip: '"+event.title+"' }");
        }
    JS;
}

protected function viewAction(): Action
    {
        return ViewAction::make()
        ->modalFooterActions(fn(ViewAction $action) => [
            // EditAction::make(),
            // DeleteAction::make(),
            // $action -> getModalCancelAction(),

        ]);
    }
  
}
