import'./Header.css';
import logo from './../../assets/bluesky.svg'

function Header() {
  return (
    <>
    <header className='w-full p-3 bg-cyan-700 flex justify-between'>
        <img src={logo}/>
        <h1>OI</h1>
        <a href="#">HOME</a>
    </header>
    </>
  )
}

export default Header