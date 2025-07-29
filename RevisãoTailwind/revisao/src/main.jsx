import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.jsx'
import Header from './componets/header/header.jsx'
import Alerta from './componets/Alerta/Alerta.jsx'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <Header />
    {/* PROPS - atributo que  */}
    <Alerta msg="ALERTA!!!"/>
    <Alerta msg="VOCÊ É UM NINJA!!!"/>
    <Alerta msg="SEU SALÁRIO CABOU!!!"/>
    <App />

  </StrictMode>,
)
