drop table if exists media;
create table if not exists media(
    id serial primary key,
    nome varchar(50) unique not null
);

drop table if exists portifolio;
create table if not exists (
    id serial primary key,
    imagem varchar(255) not null,
    title varchar(255) not null,
    texto text not null);