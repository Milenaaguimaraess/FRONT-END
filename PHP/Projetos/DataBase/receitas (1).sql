-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2025 às 22:45
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
-- Banco de dados: `receitas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comida`
--

CREATE TABLE `comida` (
  `idComida` int(11) NOT NULL,
  `tituloComida` text NOT NULL,
  `descricaoComida` text NOT NULL,
  `receitaTexto` longtext NOT NULL,
  `autorComida` text NOT NULL,
  `categoriaComida` text NOT NULL,
  `imagem_url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comida`
--

INSERT INTO `comida` (`idComida`, `tituloComida`, `descricaoComida`, `receitaTexto`, `autorComida`, `categoriaComida`, `imagem_url`) VALUES
(1, 'Lasanha Bolonhesa', 'Ingredientes:\r\n\r\n1 kg de carne moída\r\n400 g de molho de tomate pronto\r\n300 g de presunto\r\n4 dentes de alho picados\r\nCheiro-verde picado\r\nSal à gosto\r\nÓleo (4 ou 5 colheres de sopa)\r\n250 g de massa de lasanha pronta pré-cozida\r\n350 g de queijo mussarela\r\n1 cebola grande picada\r\nAzeitonas verdes picadas\r\nOrégano\r\n2 sachês de Sazon de carne\r\n', '\r\nModo de preparo:\r\nColoque em uma panela o óleo, refogue a cebola, o alho, as azeitonas, o orégano e o cheiro-verde.\r\nColoque a carne moída e mexa, acrescente o Sazón e o sal.\r\nMisture mais um pouco.\r\nPor último coloque o molho de tomate e mexa.\r\nEm uma travessa espalhe um pouco da carne, uma camada de massa, uma camada de carne novamente, uma camada de presunto, uma camada de queijo mussarela, uma de carne e assim por diante até terminar com uma camada de queijo ou de carne.\r\nForrar com folha de alumínio e levar ao forno por mais ou menos uns vinte e cinco minutos. Espete um garfo para ver se a massa já está mole.\r\nSaboreie.', 'Tudo Gostoso', 'Salgada', 'https://static.itdg.com.br/images/640-400/6b4a739b2983e0b9ba6419857cfffcb0/254047-original.jpg'),
(2, 'Brigadeiro de Panela', '\r\n1 lata de leite condensado\r\n4 colheres de Nescau\r\n2 colheres de manteiga', 'Junte esses ingredientes numa panela. Adicione o achocolatado e a mateiga, e mexe até criar consistência, ou seja, até começar a engrossar.\r\nDespeje tudo numa vasilha de vidro e leve a geladeira. Espere aproximadamente uma hora e meia, e está pronto, é só se deliciar!', 'Ana maria', 'Doce', 'https://tse4.mm.bing.net/th/id/OIP.jkgAqN1k1epPWKAp_OquWwHaGR?rs=1&pid=ImgDetMain');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`idComida`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comida`
--
ALTER TABLE `comida`
  MODIFY `idComida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
