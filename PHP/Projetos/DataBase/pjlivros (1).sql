-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Abr-2025 às 22:31
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pjlivros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `idLivros` int(11) NOT NULL,
  `nomeLivros` varchar(150) NOT NULL,
  `imagemLivros` varchar(255) NOT NULL,
  `descricaoLivros` varchar(600) NOT NULL,
  `avaliacaoLivros` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`idLivros`, `nomeLivros`, `imagemLivros`, `descricaoLivros`, `avaliacaoLivros`) VALUES
(1, 'Daisy Jones and The Six: Uma história de amor e música', 'https://m.media-amazon.com/images/I/91ob37hsqNL._SY385_.jpg', 'Todo mundo conhece Daisy Jones & The Six. Nos anos setenta, dominavam as paradas de sucesso, faziam shows para plateias lotadas e conquistavam milhões de fãs. Eram a voz de uma geração, e Daisy, a inspiração de toda garota descolada. Mas no dia 12 de julho de 1979, no último show da turnê Aurora...', '4'),
(2, 'Guerra da Papoula', 'https://m.media-amazon.com/images/I/41sFWNhL7aL.jpg', 'A guerra está no coração do Império Nikara, e o ópio corre em suas veias. No passado, os heróis que formaram a Trindade uniram a nação contra a poderosa Federação de Mugen, e acreditava-se que eles caminhavam entre os deuses. Décadas depois, a paz reina, mas há boatos de que a Terceira Guerra da...', '5'),
(3, 'Labirinto do Fauno', 'https://media.s-bol.com/0OjoMkXD7Xxy/BNPno1W/550x806.jpg', 'No ano de 1944, Ofélia e a mãe cruzam uma estrada de terra que corta uma floresta longínqua ao norte da Espanha, um lugar que guarda histórias já esquecidas pelos homens. O novo lar é um moinho de vento tomado pela escuridão e pela crueldade do capitão Vidal e seus soldados, dispostos a tudo para ex...', '4'),
(5, 'Os dois morrem no final', 'https://tse1.mm.bing.net/th/id/OIP.L3Ygr8AWQtuZ1pomwbOV6gHaLH?rs=1&pid=ImgDetMain', 'No dia 5 de setembro, pouco depois da meia-noite, Mateo Torrez e Rufus Emeterio recebem uma ligação da Central da Morte. A notícia é devastadora: eles vão morrer naquele mesmo dia.\r\n\r\nOs dois não se conhecem, mas, por motivos diferentes, estão à procura de um amigo com quem compartilhar os últimos m...', '5');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`idLivros`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `idLivros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
