import'./Header.css';
import logo from './../../assets/bluesky.svg'

function Header() {
  return (
    <header className='w-full p-3 bg-violet-400 flex justify-between'>
      {/* header esquerda */}
      <div className='logo'>
        <img src={Logo} />
      </div>
      {/* header  direita*/}
      <div className='links'>
        <nav>
          <ul className='flex gap-3'>
            <li><a href="#">HOME</a></li>
            <li><a href="#">CATALOGO</a></li>
            <li><a href="#">MAIS INFORMAÇÕES</a></li>
          </ul>
        </nav>

      </div>
    </header>
  );
}

export default Header