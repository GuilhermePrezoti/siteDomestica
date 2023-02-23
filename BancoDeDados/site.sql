create database site;

use site;

create table domestica(
	cpf bigint not null primary key,
    nome varchar (100) not null,
    dataDeNascimento varchar(10) not null,
    rua varchar(100) not null,
    cidade varchar(100) not null,
    bairro varchar(100) not null,
    numero int(5) not null,
    avaliacao int(1) not null,
    senha varchar (100) not null,
    email varchar(100) not null,
    telefone varchar(13) not null,
    interesse1 varchar(50) not null,
    interesse2 varchar(50) not null,
    interesse3 varchar(50) not null,
    interesse4 varchar(50) not null
)Engine = InnoDB;

create table cliente(
	cpf bigint not null primary key,
    nome varchar(100) not null,
    dataDeNascimento varchar(10) not null,
    rua varchar(100) not null,
    cidade varchar(100) not null,
    bairro varchar(100) not null,
    numero int(5) not null,
    avaliacao int(1) not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(13) not null
)Engine = InnoDB;

create table anuncios(
	cpf bigint not null primary key,
    titulo varchar(50) not null,
    descricao varchar(1000) not null,
    valor decimal(10,2) not null,
    cidade varchar(25) not null,
    logradouro varchar(50) not null,
    bairro varchar(25) not null,
    numero int not null,
    dataPublicacao date not null,
     imagem varchar(100) not null
)Engine = InnoDB;

create table candidatura(
	codigoCandidatura int not null primary key auto_increment,
	codigoVaga int not null,
	nome varchar(100) not null,
	telefone varchar(11) not null
) Engine = InnoDB;

insert into anuncios(cpf, titulo, descricao, valor, cidade, logradouro, bairro, numero, dataPublicacao) values ('123', 'trampo', 'trampao bom', '15', 'sbc', 'rua 2', 'montanhão', '2152', '2023-02-14');


insert into domestica (cpf, nome, dataDeNascimento, rua, bairro, cidade, numero, avaliacao, senha, email, telefone, interesse1, interesse2, interesse3, interesse4) values ('1235','ana','2005-02-02','rua','bairro','cidade','13','2','abc','email','119999999', 'SBC','Diadema', 'SP', 'Pindamonhangaba');


select * from domestica;



drop table anuncios;