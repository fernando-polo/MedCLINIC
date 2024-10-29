import { jsxs, jsx } from "react/jsx-runtime";
import { useEffect } from "react";
import { G as Guest } from "./GuestLayout-C6RG6yLW.js";
import { T as TextInput, I as InputError } from "./TextInput-DQL-42yE.js";
import { I as InputLabel } from "./InputLabel-CaoVq05r.js";
import { P as PrimaryButton } from "./PrimaryButton-C5ts3FGL.js";
import { useForm, Head, Link } from "@inertiajs/react";
import "./ApplicationLogo-VXSMMN2A.js";
function Register() {
  const { data, setData, post, processing, errors, reset } = useForm({
    nombre: "",
    email: "",
    password: "",
    confirm_password: "",
    telefono: "",
    confirm_telefono: "",
    sexo: "",
    fecha_nacimiento: "",
    nss: "",
    curp: ""
  });
  useEffect(() => {
    return () => {
      reset("password", "confirm_password");
    };
  }, []);
  const submit = (e) => {
    e.preventDefault();
    post(route("register"));
  };
  return /* @__PURE__ */ jsxs(Guest, { children: [
    /* @__PURE__ */ jsx(Head, { title: "Register" }),
    /* @__PURE__ */ jsxs("form", { onSubmit: submit, children: [
      /* @__PURE__ */ jsxs("div", { children: [
        /* @__PURE__ */ jsx(InputLabel, { htmlFor: "nombre", value: "nombre" }),
        /* @__PURE__ */ jsx(
          TextInput,
          {
            id: "nombre",
            name: "nombre",
            value: data.nombre,
            className: "mt-1 block w-full",
            autoComplete: "nombre",
            isFocused: true,
            onChange: (e) => setData("nombre", e.target.value),
            required: true
          }
        ),
        /* @__PURE__ */ jsx(InputError, { message: errors.nombre, className: "mt-2" })
      ] }),
      /* @__PURE__ */ jsxs("div", { className: "mt-4", children: [
        /* @__PURE__ */ jsx(InputLabel, { htmlFor: "email", value: "Email" }),
        /* @__PURE__ */ jsx(
          TextInput,
          {
            id: "email",
            type: "email",
            name: "email",
            value: data.email,
            className: "mt-1 block w-full",
            autoComplete: "username",
            onChange: (e) => setData("email", e.target.value),
            required: true
          }
        ),
        /* @__PURE__ */ jsx(InputError, { message: errors.email, className: "mt-2" })
      ] }),
      /* @__PURE__ */ jsxs("div", { className: "mt-4", children: [
        /* @__PURE__ */ jsx(InputLabel, { htmlFor: "password", value: "Password" }),
        /* @__PURE__ */ jsx(
          TextInput,
          {
            id: "password",
            type: "password",
            name: "password",
            value: data.password,
            className: "mt-1 block w-full",
            autoComplete: "new-password",
            onChange: (e) => setData("password", e.target.value),
            required: true
          }
        ),
        /* @__PURE__ */ jsx(InputError, { message: errors.password, className: "mt-2" })
      ] }),
      /* @__PURE__ */ jsxs("div", { className: "mt-4", children: [
        /* @__PURE__ */ jsx(InputLabel, { htmlFor: "confirm_password", value: "Confirm Password" }),
        /* @__PURE__ */ jsx(
          TextInput,
          {
            id: "confirm_password",
            type: "password",
            name: "confirm_password",
            value: data.confirm_password,
            className: "mt-1 block w-full",
            autoComplete: "new-password",
            onChange: (e) => setData("confirm_password", e.target.value),
            required: true
          }
        ),
        /* @__PURE__ */ jsx(InputError, { message: errors.confirm_password, className: "mt-2" })
      ] }),
      /* @__PURE__ */ jsxs("div", { className: "flex items-center justify-end mt-4", children: [
        /* @__PURE__ */ jsx(
          Link,
          {
            href: route("login"),
            className: "underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800",
            children: "¿Ya estás registardo?"
          }
        ),
        /* @__PURE__ */ jsx(PrimaryButton, { className: "ms-4", disabled: processing, children: "Registrar" })
      ] })
    ] })
  ] });
}
export {
  Register as default
};
