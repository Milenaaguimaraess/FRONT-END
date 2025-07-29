import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.jsx'
import Header from './componets/header/header.jsx'
import Alerta from './componets/Alerta/Alerta.jsx'
import { createBrowaerRouter, RouterProvider} from "react-router-dom"
import  

const router = createBrowaerRouter{[
  {
    path: "/" ,
    element: <App/>,
  }
  {
    path: "/catalogo",
    element: <Catalogo />
  }
]}

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <Header />
    {/* PROPS - é um coletor genérico de atributo  */}
    <Alerta msg="ALERTA!!!"/>
    <Alerta msg="VOCÊ É UM NINJA!!!"/>
    <Alerta msg="SEU SALÁRIO CABOU!!!"/>
    <App />
    <RouterProvider/>
  </StrictMode>,
)
