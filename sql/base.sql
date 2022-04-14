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
    texto varchar(255) not null);

insert into media (nome) values 
("bi-twitter"),
("bi-facebook"),
("bi-instagram"),
("bi-linkedin");

insert into portifolio (imagem, title, texto) values 
("portifolio-1","App 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-2","Web 3", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-3","App 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-4","Card 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-5","Web 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-6","App 3", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-7","Card 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-8","Card 3", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis."),

("portifolio-9","Web 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis.");