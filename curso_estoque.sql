-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jan-2021 às 21:37
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curso_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feriados`
--

CREATE TABLE `feriados` (
  `id_feriado` int(100) NOT NULL,
  `date` date NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(900) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `codtipo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `feriados`
--

INSERT INTO `feriados` (`id_feriado`, `date`, `nome`, `descricao`, `tipo`, `codtipo`) VALUES
(2, '2020-01-01', 'Ano Novo', 'O Ano-Novo ou Réveillon é um evento que acontece quando uma cultura celebra o fim de um ano e o começo do próximo. A celebração do evento é também chamada Réveillon, termo oriundo do verbo francês réveiller, que em português significa DESPERTAR', 'Feriado Nacional', 1),
(3, '2020-02-25', 'Carnaval', 'Carnaval NÃO é um feriado oficial, é Ponto Facultativo, ou seja, cabe às empresas e orgão públicos decidirem se trabalharão ou não.', 'Facultativo', 4),
(4, '2020-02-24', 'Carnaval', 'Ponto Facultativo, ou seja, cabe às empresas e orgão públicos decidirem se trabalharão ou não.', 'Facultativo', 4),
(5, '2020-02-26', 'Carnaval', 'Ponto Facultativo até às 14h.', 'Facultativo', 4),
(6, '2020-06-11', 'Corpus Christi', 'Ponto Facultativo no País, mas Feriado Municipal em algumas cidades.. Corpus Christi, expressão latina que significa Corpo de Cristo, é uma festa Cristã realizada na quinta-feira seguinte ao domingo da Santíssima Trindade.', 'Facultativo', 4),
(7, '2020-11-20', 'Consciência Negra', 'Apesar de ser comemorado em todo o território nacional, conforme indica a Lei Federal nº 12.519, de 10 de novembro de 2011, o Dia Nacional de Zumbi e da Consciência Negra não é feriado. No entanto, alguns municípios decretam feriado municipal neste dia.', 'Dia Convencional', 9),
(8, '2020-04-01', 'Dia da Mentira', 'Dia da mentira, dia das petas, dia dos tolos ou dia dos bobos.', 'Dia Convencional', 9),
(9, '2020-05-10', 'Dia das Mães', 'O Dia das Mães teve a sua origem no princípio do século XX, quando uma jovem norte-americana, Anna Jarvis, perdeu sua mãe e entrou em completa depressão. Preocupadas com aquele sofrimento, algumas amigas tiveram a ideia de criar uma data para comemorar o dia das mães.', 'Dia Convencional', 9),
(10, '2020-11-02', 'Dia de Finados', 'O Dia de Finados ou Dia dos Fiéis Defuntos, (conhecido ainda como Dia dos Mortos no México), é celebrado pela Igreja Católica no dia 2 de novembro e é Feriado Nacional.', 'Feriado Nacional', 1),
(11, '2020-10-12', 'Nossa Senhora Aparecida', 'Nossa Senhora da Conceição Aparecida é a padroeira do Brasil. Sua festa é celebrada em 12 de outubro, um feriado nacional desde que o Papa João Paulo II consagrou a Basílica em 1980.', 'Feriado Nacional', 1),
(12, '2020-04-21', 'Dia de Tiradentes', 'Joaquim José da Silva Xavier, o Tiradentes foi um dentista, tropeiro, minerador, comerciante, militar e ativista político. É reconhecido como mártir da Inconfidência Mineira e herói nacional. O dia de sua execução, 21 de abril, é feriado nacional.', 'Feriado Nacional', 1),
(13, '2020-10-17', 'Dia do Comércio', 'Comemoração do dia do comércio. Em algumas cidades do Brasil o comércio poderá fechar, dependendo de acordos entre os sindicatos e patrões.', 'Dia Convencional', 9),
(14, '2020-10-15', 'Dia do Professor', 'FERIADO ESCOLAR - No dia 15 de outubro de 1827 (dia consagrado à educadora Santa Teresa de Ávila), o Imperador do Brasil, Pedro I,  baixou um Decreto Imperial que criou o Ensino Elementar no Brasil. Pelo decreto, \"todas as cidades, vilas e lugarejos teriam suas escolas de primeiras letras\"', 'Facultativo', 4),
(15, '2020-10-28', 'Dia do Servidor Público', 'O dia do servidor público é feriado apenas para funcionários públicos.', 'Facultativo', 4),
(16, '2020-05-01', 'Dia do Trabalho', 'O Dia do Trabalhador ou Dia Internacional dos Trabalhadores é celebrado anualmente no dia 1º de Maio em numerosos países do mundo, sendo feriado no Brasil, em Portugal e em outros países.', 'Feriado Nacional', 1),
(17, '2020-06-12', 'Dia dos Namorados', 'O Dia dos Namorados ou Dia de São Valentim é uma data comemorativa na qual se celebra a união amorosa entre casais sendo comum a troca de cartões e presentes.', 'Dia Convencional', 9),
(18, '2020-08-09', 'Dia dos Pais', 'Em 1909, nos Estados Unidos, Sonora Luise resolveu criar um dia dedicado aos pais, motivada pela admiração que sentia pelo seu pai, William Jackson Smart. O interesse pela data difundiu-se da cidade de Spokane para todo o Estado de Washington e para o Mundo.', 'Dia Convencional', 9),
(19, '2020-09-07', 'Independência do Brasil', 'O Dia da Indepência do Brasil, oficialmente a data comemorada é a de 7 de setembro de 1822, em que ocorreu o chamado \"Grito do Ipiranga\".', 'Feriado Nacional', 1),
(20, '2020-11-15', 'Proclamação da República', 'A Proclamação da República foi um levante político-militar ocorrido em 15 de novembro de 1889 que instaurou a forma Republicana Federativa Presidencialista de governo no Brasil, derrubando a Monarquia e, por conseguinte, o imperador dom Pedro II.', 'Feriado Nacional', 1),
(21, '2020-12-25', 'Natal', 'O Natal é comemorado anualmente em 25 de Dezembro. Originalmente destinado a celebrar o nascimento anual do Deus Sol no solstício de inverno, foi adaptado pela Igreja Católica no 3o século d.C., para permitir a conversão dos povos pagãos sob o domínio do Império Romano, passando a comemorar o nascimento de Jesus de Nazaré.', 'Feriado Nacional', 1),
(22, '2020-04-12', 'Páscoa', 'A Páscoa é um evento religioso cristão, normalmente considerado pelas igrejas ligadas a esta corrente religiosa como a maior e a mais importante festa da Cristandade. Na Páscoa os cristãos celebram a Ressurreição de Jesus Cristo depois da sua morte.', 'Dia Convencional', 9),
(23, '2020-04-10', 'Sexta-Feira Santa', 'Também chamada de \"Sexta Feira da Paixão\" é a sexta-feira que ocorre antes do domingo de Páscoa, e é o dia que os cristãos lembram da crucificação de Cristo.', 'Feriado Nacional', 1),
(24, '2020-03-06', 'Revolução Pernambucana', 'A Revolução Pernambucana, também conhecida como Revolução dos Padres, foi um movimento de caráter liberal e republicano que eclodiu no dia 6 de março de 1817 em Pernambuco, no Brasil', 'Feriado Estadual', 2),
(25, '2020-06-24', 'Dia de São João', 'A noite de 23 de Junho, véspera do Dia de São João, marca o início da celebração da festa de São João Batista. O Evangelho de Lucas (Lucas 1:36, 56-57) afirma que João nasceu cerca de seis meses antes de Jesus; portanto, a festa de São João Batista foi fixada em 24 de junho, seis meses antes da véspera de Natal. Este dia de festa é um dos poucos dias santos que comemora o aniversário do nascimento, ao invés da morte, do santo homenageado. ', 'Feriado Estadual', 2),
(26, '2020-07-16', 'Padroeira', 'Dia de Nossa Senhora do Carmo (Padroeira do Recife)', 'Feriado Municipal', 3),
(27, '2020-12-08', 'N. Sra. da Conceição', 'Dia de Nossa Senhora. da Conceição', 'Feriado Municipal', 3),
(28, '2020-04-10', 'Sexta-feira Santa', 'Sexta-feira Santa', 'Feriado Municipal', 3),
(29, '2021-01-15', 'Dia de Santo Amaro', 'Dia de Santo Amaro - Padroeiro da Cidade de Jaboatão dos Guararapes', 'Feriado Municipal', 1),
(30, '2021-05-04', 'Aniversário da Cidade Jaboatão dos Guararapes', 'A cidade é conhecida como \"Berço da Pátria\", por ter sido palco da Batalha dos Guararapes, travada em dois confrontos, em 1648 e 1649. Nesta batalha, pernambucanos e portugueses expulsaram os invasores holandeses do seu território. Em 1989, o município passou a chamar-se \"Jaboatão dos Guararapes\", parte em homenagem ao Monte dos Guararapes, local onde ocorreu a batalha, que foi parte da Insurreição Pernambucana.', 'Feriado Municipal', 1),
(32, '2021-01-01', 'Ano Novo', 'O Ano-Novo ou Réveillon é um evento que acontece quando uma cultura celebra o fim de um ano e o começo do próximo. A celebração do evento é também chamada Réveillon, termo oriundo do verbo francês réveiller, que em português significa DESPERTAR', 'Feriado Nacional', 1),
(33, '2021-02-16', 'Carnaval', 'Carnaval NÃO é um feriado oficial, é Ponto Facultativo, ou seja, cabe às empresas e orgão públicos decidirem se trabalharão ou não.', 'Facultativo', 4),
(34, '2021-02-15', 'Carnaval', 'Ponto Facultativo, ou seja, cabe às empresas e orgão públicos decidirem se trabalharão ou não.', 'Facultativo', 4),
(35, '2021-02-17', 'Carnaval', 'Ponto Facultativo até às 14h.', 'Facultativo', 4),
(36, '2021-06-03', 'Corpus Christi', 'Ponto Facultativo no País, mas Feriado Municipal em algumas cidades.. Corpus Christi, expressão latina que significa Corpo de Cristo, é uma festa Cristã realizada na quinta-feira seguinte ao domingo da Santíssima Trindade.', 'Facultativo', 4),
(37, '2021-11-20', 'Consciência Negra', 'Apesar de ser comemorado em todo o território nacional, conforme indica a Lei Federal nº 12.519, de 10 de novembro de 2011, o Dia Nacional de Zumbi e da Consciência Negra não é feriado. No entanto, alguns municípios decretam feriado municipal neste dia.', 'Dia Convencional', 9),
(38, '2021-04-01', 'Dia da Mentira', 'Dia da mentira, dia das petas, dia dos tolos ou dia dos bobos.', 'Dia Convencional', 9),
(39, '2021-05-09', 'Dia das Mães', 'O Dia das Mães teve a sua origem no princípio do século XX, quando uma jovem norte-americana, Anna Jarvis, perdeu sua mãe e entrou em completa depressão. Preocupadas com aquele sofrimento, algumas amigas tiveram a ideia de criar uma data para comemorar o dia das mães.', 'Dia Convencional', 9),
(40, '2021-11-02', 'Dia de Finados', 'O Dia de Finados ou Dia dos Fiéis Defuntos, (conhecido ainda como Dia dos Mortos no México), é celebrado pela Igreja Católica no dia 2 de novembro e é Feriado Nacional.', 'Feriado Nacional', 1),
(41, '2021-10-12', 'Nossa Senhora Aparecida', 'Nossa Senhora da Conceição Aparecida é a padroeira do Brasil. Sua festa é celebrada em 12 de outubro, um feriado nacional desde que o Papa João Paulo II consagrou a Basílica em 1980.', 'Feriado Nacional', 1),
(42, '2021-04-21', 'Dia de Tiradentes', 'Joaquim José da Silva Xavier, o Tiradentes foi um dentista, tropeiro, minerador, comerciante, militar e ativista político. É reconhecido como mártir da Inconfidência Mineira e herói nacional. O dia de sua execução, 21 de abril, é feriado nacional.', 'Feriado Nacional', 1),
(43, '2021-10-17', 'Dia do Comércio', 'Comemoração do dia do comércio. Em algumas cidades do Brasil o comércio poderá fechar, dependendo de acordos entre os sindicatos e patrões.', 'Dia Convencional', 9),
(44, '2021-10-15', 'Dia do Professor', 'FERIADO ESCOLAR - No dia 15 de outubro de 1827 (dia consagrado à educadora Santa Teresa de Ávila), o Imperador do Brasil, Pedro I,  baixou um Decreto Imperial que criou o Ensino Elementar no Brasil. Pelo decreto, \"todas as cidades, vilas e lugarejos teriam suas escolas de primeiras letras\"', 'Facultativo', 4),
(45, '2021-10-28', 'Dia do Servidor Público', 'O dia do servidor público é feriado apenas para funcionários públicos.', 'Facultativo', 4),
(46, '2021-05-01', 'Dia do Trabalho', 'O Dia do Trabalhador ou Dia Internacional dos Trabalhadores é celebrado anualmente no dia 1º de Maio em numerosos países do mundo, sendo feriado no Brasil, em Portugal e em outros países.', 'Feriado Nacional', 1),
(47, '2021-06-12', 'Dia dos Namorados', 'O Dia dos Namorados ou Dia de São Valentim é uma data comemorativa na qual se celebra a união amorosa entre casais sendo comum a troca de cartões e presentes.', 'Dia Convencional', 9),
(48, '2021-08-08', 'Dia dos Pais', 'Em 1909, nos Estados Unidos, Sonora Luise resolveu criar um dia dedicado aos pais, motivada pela admiração que sentia pelo seu pai, William Jackson Smart. O interesse pela data difundiu-se da cidade de Spokane para todo o Estado de Washington e para o Mundo.', 'Dia Convencional', 9),
(49, '2021-09-07', 'Independência do Brasil', 'O Dia da Indepência do Brasil, oficialmente a data comemorada é a de 7 de setembro de 1822, em que ocorreu o chamado \"Grito do Ipiranga\".', 'Feriado Nacional', 1),
(50, '2021-11-15', 'Proclamação da República', 'A Proclamação da República foi um levante político-militar ocorrido em 15 de novembro de 1889 que instaurou a forma Republicana Federativa Presidencialista de governo no Brasil, derrubando a Monarquia e, por conseguinte, o imperador dom Pedro II.', 'Feriado Nacional', 1),
(51, '2021-12-25', 'Natal', 'O Natal é comemorado anualmente em 25 de Dezembro. Originalmente destinado a celebrar o nascimento anual do Deus Sol no solstício de inverno, foi adaptado pela Igreja Católica no 3o século d.C., para permitir a conversão dos povos pagãos sob o domínio do Império Romano, passando a comemorar o nascimento de Jesus de Nazaré.', 'Feriado Nacional', 1),
(52, '2021-04-04', 'Páscoa', 'A Páscoa é um evento religioso cristão, normalmente considerado pelas igrejas ligadas a esta corrente religiosa como a maior e a mais importante festa da Cristandade. Na Páscoa os cristãos celebram a Ressurreição de Jesus Cristo depois da sua morte.', 'Dia Convencional', 9),
(53, '2021-04-02', 'Sexta-Feira Santa', 'Também chamada de \"Sexta Feira da Paixão\" é a sexta-feira que ocorre antes do domingo de Páscoa, e é o dia que os cristãos lembram da crucificação de Cristo.', 'Feriado Nacional', 1),
(54, '2021-03-06', 'Revolução Pernambucana', 'A Revolução Pernambucana, também conhecida como Revolução dos Padres, foi um movimento de caráter liberal e republicano que eclodiu no dia 6 de março de 1817 em Pernambuco, no Brasil', 'Feriado Estadual', 2),
(55, '2021-06-24', 'Dia de São João', 'A noite de 23 de Junho, véspera do Dia de São João, marca o início da celebração da festa de São João Batista. O Evangelho de Lucas (Lucas 1:36, 56-57) afirma que João nasceu cerca de seis meses antes de Jesus; portanto, a festa de São João Batista foi fixada em 24 de junho, seis meses antes da véspera de Natal. Este dia de festa é um dos poucos dias santos que comemora o aniversário do nascimento, ao invés da morte, do santo homenageado. ', 'Feriado Estadual', 2),
(56, '2021-07-16', 'Padroeira', 'Dia de Nossa Senhora do Carmo (Padroeira do Recife)', 'Feriado Municipal', 3),
(57, '2021-12-08', 'N. Sra. da Conceição', 'Dia de Nossa Senhora. da Conceição', 'Feriado Municipal', 3),
(58, '2021-04-02', 'Sexta-feira Santa', 'Sexta-feira Santa', 'Feriado Municipal', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro`
--

CREATE TABLE `financeiro` (
  `preference_id` varchar(255) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `preco` double NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `data_pagamento` date NOT NULL,
  `vencimento` date NOT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) DEFAULT NULL,
  `id_financeiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logradouro`
--

CREATE TABLE `logradouro` (
  `id_endereco` int(11) NOT NULL,
  `cep` int(11) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `ponto de referencia` varchar(255) DEFAULT NULL,
  `numero` int(100) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NULL DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `reg_data_pagamento` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `id_telefone` int(11) NOT NULL,
  `fixo` varchar(50) DEFAULT NULL,
  `celular` varchar(50) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tutor`
--

CREATE TABLE `tutor` (
  `id_responsavel` int(11) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `identidade` varchar(50) DEFAULT NULL,
  `tipoidentidade` varchar(255) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `nivel_usuario` int(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ultimo_login` datetime DEFAULT NULL,
  `user_altera` varchar(255) DEFAULT NULL,
  `data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `data_cadastro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feriados`
--
ALTER TABLE `feriados`
  ADD PRIMARY KEY (`id_feriado`);

--
-- Índices para tabela `financeiro`
--
ALTER TABLE `financeiro`
  ADD PRIMARY KEY (`id_financeiro`),
  ADD KEY `financeiro_usuario_id_usuario_fk` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `logradouro`
--
ALTER TABLE `logradouro`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `logradouro_usuario_id_usuario_fk` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`),
  ADD KEY `pagamento_usuario_id_usuario_fk` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id_telefone`),
  ADD KEY `telefone_usuario_id_usuario_fk` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_responsavel`),
  ADD KEY `tutor_usuario_id_usuario_fk` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `feriados`
--
ALTER TABLE `feriados`
  MODIFY `id_feriado` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `financeiro`
--
ALTER TABLE `financeiro`
  MODIFY `id_financeiro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `logradouro`
--
ALTER TABLE `logradouro`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `id_telefone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_responsavel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `financeiro`
--
ALTER TABLE `financeiro`
  ADD CONSTRAINT `financeiro_usuario_id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Limitadores para a tabela `logradouro`
--
ALTER TABLE `logradouro`
  ADD CONSTRAINT `logradouro_usuario_id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_usuario_id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_usuario_id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE SET NULL;

--
-- Limitadores para a tabela `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_usuario_id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
