-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Fev-2023 às 03:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbagendinha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(200) NOT NULL,
  `emailCliente` varchar(150) NOT NULL,
  `telefoneCliente` varchar(30) NOT NULL,
  `enderecoCliente` varchar(300) NOT NULL,
  `sexoCliente` char(1) NOT NULL,
  `dataNascCliente` date NOT NULL,
  `cpfCliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `emailCliente`, `telefoneCliente`, `enderecoCliente`, `sexoCliente`, `dataNascCliente`, `cpfCliente`) VALUES
(1, 'Lucas Melo', 'lucas@email.com', '61 996569423', 'Rua 2 casa 01', 'M', '1996-01-20', '034.392.071-96'),
(2, 'Luanna Alves', 'luanna@email.com', '61 996789927', 'Ligeiramente Linda', 'F', '1999-07-07', '051.063.124-56'),
(5, 'Heloísa', 'helo@email.com', '61 99999999999', 'Condominio dos Ipês', 'F', '2020-09-23', ''),
(11, 'Cleves Darler', 'cleves@email.com', '61 995522332', 'Casa 2 rua 01', 'F', '1978-08-07', ''),
(12, 'Daniel Rodrigues', 'daniel@email.com', '61 9955844554', 'Rua 04 casa 5', 'M', '1967-10-28', ''),
(13, 'Sarah Melo', 'sarah@email.com', '61 981545474', 'Ed. Guardian Ap 104', 'F', '1992-12-11', ''),
(14, 'Gabriella Melo', 'bella@email.com', '61 994522121', 'Casa 02 Rua 01', 'F', '1994-08-08', ''),
(15, 'Arlison Marinho', 'arlison@email.com', '61 9955588854', 'Cond. casa 87', 'M', '1978-05-20', ''),
(16, 'Fernanda Souza', 'fernanda@email.com', '61 982544785', 'Cond imperio', 'F', '1979-08-25', ''),
(17, 'Lucas Souza', 'lucasouza@email.com', '61 998877665', 'Olaria - Barra Nova - Casa 57', 'M', '1997-07-28', ''),
(18, 'Edite Marinho', 'edite@email.com', '61 984566552', 'Praia Brava - Norte da ilha Chacara 47', 'F', '1960-04-12', ''),
(19, 'Maria Eliete', 'mariaeliete@email.com', '61 85211454', 'Ar 10 Conjunto 09 casa 32', 'F', '1958-12-03', ''),
(20, 'Nike Havenna', 'nike@email.com', '61 981144552', 'Rua 02 casa 01', 'F', '2020-10-28', ''),
(21, 'Half Miguel', 'half@email.com', '61 933554477', 'Casa 02 Rua 01', 'M', '2013-05-12', ''),
(22, 'Rui Barbosa', 'rui@email.com', '61 996655854', 'Ediif. Candido ap 2012', 'M', '1985-08-12', ''),
(23, 'Malcom X', 'malxon@email.com', '61 984445521', 'Cond. Imperio Conj F casa 24G', 'M', '1989-12-22', ''),
(24, 'Robert Marley', 'robert@email.com', '61 9984545454', 'Rua Casas Casa Rua', 'M', '1979-03-22', ''),
(25, 'Elizabete Terceiro', 'elizament@email.com', '61 955845454', 'São Paulo - Paraguai', 'F', '1984-12-21', ''),
(26, 'Lis Regina', 'lis@email.com', '61 58454745', 'Copacabana', 'F', '1988-09-24', ''),
(27, 'Aluízio Lopes', 'alura@email.com', '61 58454747', 'Cavidade Ossea', 'M', '1988-11-25', ''),
(28, 'Calipson Freitas', 'caliplay@email.com', '61 98554121', 'Condominio Moraes', 'M', '2000-09-13', ''),
(29, 'Hariel Fernandes', 'fernandes@email.com', '61 955212151', 'Edificio Lopes Ap 8009', 'M', '1991-04-25', ''),
(30, 'Alexandre Pires', 'aluexa@email.com', '61 9565656554', 'Gastei 11 Noites', 'M', '2001-05-08', ''),
(31, 'Cristinha Cunha', 'criscoffe@email.com', '61 6565465454', 'Rua tal Do bananal', 'F', '1993-05-20', ''),
(32, 'Romario Ferreira', 'romarinho@email.com', '61 84455777', 'Lebron RJ', 'M', '1994-10-20', ''),
(33, 'Thiago Abreu', 'thiago@email.com', '61 995544554', 'Rua 04B lote 4 Ap 501', 'M', '2023-02-13', ''),
(34, 'Romulo Freitas', 'romulo@email.com', '61 881254545', 'Condominio do Vale', 'M', '1998-09-15', ''),
(35, 'kimberli Gomes', 'kimkim@email.com', '61 999653265', 'Grande Colorado', 'F', '1989-05-25', ''),
(36, 'Ludimila Felix', 'ludi@email.com', '61 95214575', 'Casa 07 do Mansões via norte', 'F', '1975-12-12', ''),
(37, 'Dardo Homili', 'dardim@email.com', '61 85454545', 'Rua B Conjunto 08 Casa 23', 'M', '1990-04-25', ''),
(38, 'Luma Dias', 'lumar@email.com', '61 985522421', 'Alem do Horizonte', 'F', '1988-02-26', ''),
(39, 'Gilson Lira', 'gil@email.com', '61 85214785', 'Ar 065 cj 08 casa 11', 'M', '1968-08-11', ''),
(40, 'Thiago Maia', 'lucas@email.com', '61 996569423', 'Rua 2 casa 01', 'M', '1996-01-20', '034.392.071-96'),
(41, 'Lorena Cibeli', 'luanna@email.com', '61 996789927', 'Ligeiramente Linda', 'F', '1999-07-07', '051.063.124-56'),
(42, 'Litle Hair', 'cleves@email.com', '61 995522332', 'Casa 2 rua 01', 'F', '1978-08-07', ''),
(44, 'Fenix Galvão', 'daniel@email.com', '61 9955844554', 'Rua 04 casa 5', 'M', '1967-10-28', ''),
(45, 'Lombra Master', 'sarah@email.com', '61 981545474', 'Ed. Guardian Ap 104', 'F', '1992-12-11', ''),
(46, 'Teriotipilo', 'bella@email.com', '61 994522121', 'Casa 02 Rua 01', 'F', '1994-08-08', ''),
(47, 'Leonides', 'arlison@email.com', '61 9955588854', 'Cond. casa 87', 'M', '1978-05-20', ''),
(48, 'Amarildo Felix', 'fernanda@email.com', '61 982544785', 'Cond imperio', 'F', '1979-08-25', ''),
(49, 'Maicon Jeckson', 'lucasouza@email.com', '61 998877665', 'Olaria - Barra Nova - Casa 57', 'M', '1997-07-28', ''),
(50, 'Larissa Ruiva', 'edite@email.com', '61 984566552', 'Praia Brava - Norte da ilha Chacara 47', 'F', '1960-04-12', ''),
(51, 'Amirante do Norte', 'mariaeliete@email.com', '61 85211454', 'Ar 10 Conjunto 09 casa 32', 'F', '1958-12-03', ''),
(52, 'Lil Smith', 'nike@email.com', '61 981144552', 'Rua 02 casa 01', 'F', '2020-10-28', ''),
(53, 'Xuxa Meneguel', 'half@email.com', '61 933554477', 'Casa 02 Rua 01', 'M', '2013-05-12', ''),
(54, 'Ladris Robins', 'rui@email.com', '61 996655854', 'Ediif. Candido ap 2012', 'M', '1985-08-12', ''),
(55, 'Construtec Miltim', 'malxon@email.com', '61 984445521', 'Cond. Imperio Conj F casa 24G', 'M', '1989-12-22', ''),
(56, 'Casemiro Portelo', 'robert@email.com', '61 9984545454', 'Rua Casas Casa Rua', 'M', '1979-03-22', ''),
(57, 'Lombra de terra', 'elizament@email.com', '61 955845454', 'São Paulo - Paraguai', 'F', '1984-12-21', ''),
(58, 'Amenduim Torrado', 'lis@email.com', '61 58454745', 'Copacabana', 'F', '1988-09-24', ''),
(59, 'Claudio Arroba', 'alura@email.com', '61 58454747', 'Cavidade Ossea', 'M', '1988-11-25', ''),
(60, 'Only Fans', 'caliplay@email.com', '61 98554121', 'Condominio Moraes', 'M', '2000-09-13', ''),
(61, 'Brithney Espiers', 'fernandes@email.com', '61 955212151', 'Edificio Lopes Ap 8009', 'M', '1991-04-25', ''),
(62, 'Camarão da Holanda', 'aluexa@email.com', '61 9565656554', 'Gastei 11 Noites', 'M', '2001-05-08', ''),
(63, 'Rafaele menezes', 'criscoffe@email.com', '61 6565465454', 'Rua tal Do bananal', 'F', '1993-05-20', ''),
(64, 'Chico Saince', 'romarinho@email.com', '61 84455777', 'Lebron RJ', 'M', '1994-10-20', ''),
(65, 'Gustavo Lima', 'thiago@email.com', '61 995544554', 'Rua 04B lote 4 Ap 501', 'M', '2023-02-13', ''),
(66, 'Ronam Alves', 'romulo@email.com', '61 881254545', 'Condominio do Vale', 'M', '1998-09-15', ''),
(67, 'Hipófilo pro Filho', 'kimkim@email.com', '61 999653265', 'Grande Colorado', 'F', '1989-05-25', ''),
(68, 'Mauro Borges', 'ludi@email.com', '61 95214575', 'Casa 07 do Mansões via norte', 'F', '1975-12-12', ''),
(69, 'Laura Antonelli', 'dardim@email.com', '61 85454545', 'Rua B Conjunto 08 Casa 23', 'M', '1990-04-25', ''),
(70, 'Sandro Arquivos', 'lumar@email.com', '61 985522421', 'Alem do Horizonte', 'F', '1988-02-26', ''),
(71, 'Mariana TimMaia', 'gil@email.com', '61 85214785', 'Ar 065 cj 08 casa 11', 'M', '1968-08-11', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
