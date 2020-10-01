--_Tarefa 9A de Odaw
-- Autor: Geremias Corrêa
-- Obs: Caixa alta ou pequena é indiferente, apenas por costume.

-- Criando database
CREATE DATABASE clube;

-- Então declaro o uso da database a qual quero inserir (inclusive no shell):
USE clube;

-- Criando uma tabela dos jogadores (if para caso exista):
DROP TABLE IF EXISTS jogadores;
CREATE TABLE jogadores(
    ID int(10) NOT NULL auto_increment,
    Name varchar(50) NOT NULL default '',
    NumeroCamisa int(2) NOT NULL,
    Posicao varchar(20) NULL,
    PRIMARY KEY (ID)
);

-- Criando uma tabela da comissão técnica (if para caso exista):
DROP TABLE IF EXISTS comissaoTecnica;
CREATE TABLE comissaoTecnica(
    ID int(10) NOT NULL auto_increment,
    Name varchar(50) NOT NULL default '',
    Cargo varchar(20) NOT NULL default '',
    PRIMARY KEY (ID)
);

-- Criando o endereço do clube (if para caso exista): 
DROP TABLE IF EXISTS dados; 
CREATE TABLE dados(
    NomeClube varchar(50) NOT NULL default'',
    Rua varchar(100) NOT NULL default'',
    Numero int (10) NOT NULL,
    Cidade varchar(50) NOT NULL default'',
    Pais varchar(50) NOT NULL default'',
    Estadio varchar(100) NOT NULL default'',
);

-- Inserindo alguns dados:
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Lewandoski', 9, 'Centroavante');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Neymar', 11, 'Ponta esquerda');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Douglas Costa', 7, 'Ponta direita');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Goretzka', 8, 'Meio campo');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Saúl', 10, 'Meio Campo');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Allan', 13, 'Volante');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Wallace', 3, 'Zagueiro');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Sule', 4, 'Zagueiro');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Alex Telles', 12, 'Lateral esquerdo');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Kimmich', 2, 'Lateral direito');
INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ('Alisson', 1, 'Goleiro');

INSERT INTO dados (NomeClube, Rua, Numero, Cidade, Pais, Estadio) VALUES ('Fracarsenal F.C.''Drayton Park',75,'Londres','Inglaterra','Emirates Stadium');

INSERT INTO comissaoTecnica (Name, Cargo) VALUES ('Francisco Sendoya','Tecnico');

-- Buscando alguns dados - retorno todos os dados menos a ID dos jogadores contidos na tabela:
SELECT Name, NumeroCamisa, Posicao FROM jogadores;
-- Agora todos os dados da tabela dados:
SELECT * FROM dados;

-- Agora alterando alguns dados, como o nome do técnico:
UPDATE comissaoTecnica SET Name = 'Mikel Arteta' WHERE Name = 'Francisco Sendoya';

-- Agora deletando alguns dados:
-- Antes:
SELECT * FROM jogadores WHERE ID = 1;
-- Aqui realmente deletando.
DELETE FROM jogadores WHERE ID = 1;
-- Depois:
SELECT * FROM jogadores WHERE ID = 1;

-- Agora deletando a tabela jogadores:
DROP TABLE jogadores;
-- Tem a opção do truncate, esse só elimina os dados, não a estrutura da tabela em si.

-- Apagando a database completamente:
DROP DATABASE clube;
