drop table if exists categoria cascade;
create table if not exists categoria(
    id serial primary key,
    nome varchar(50) unique not null,
    criado_em timestamp not null default current_timestamp
);

drop table if exists blog cascade;
create table if not exists blog(
    id serial primary key,
    titulo varchar(255) not null,
    descricao text not null,
    categoria_id int not null,
    criado_em timestamp not null default current_timestamp,
	foreign key(categoria_id) references categoria(id)
);

drop table if exists usuario cascade;
create table if not exists usuario(
    id serial primary key,
    nome varchar(150) not null,
    email varchar(150) not null,
    senha varchar(150) not null
);


insert into blog (titulo, descricao) values
('Blog post title', 'Some quick example text to build on the card title and make up the bulk of the cards content.'),
('Another blog post title', 'This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the cards content.'),
('The last blog post title is a little bit longer than the others', 'Some more quick example text to build on the card title and make up the bulk of the cards content.');
