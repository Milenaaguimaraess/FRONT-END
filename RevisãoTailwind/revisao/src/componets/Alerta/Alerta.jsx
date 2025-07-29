import './Alerta.css'

const Alerta=(props)=> {
    return(
        <>
        <div className="alert">
          {props.msg}
        </div>
        </>
    )
} 

export default Alerta