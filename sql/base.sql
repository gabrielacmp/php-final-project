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
("portifolio-1","App 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet culpa, voluptates repudiandae unde nulla assumenda commodi accusamus explicabo recusandae reiciendis. Debitis placeat sint animi molestias dicta blanditiis voluptates eveniet reiciendis."),

("portifolio-2","Web 3", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate consectetur id ea repudiandae reprehenderit ipsam labore vel corrupti ullam! Error, omnis amet! Eveniet debitis laborum, commodi modi ea magnam sapiente!"),

("portifolio-3","App 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil maxime consequatur iure ipsum perspiciatis asperiores, incidunt quaerat cupiditate, mollitia nulla modi expedita blanditiis dolore corporis impedit, placeat ea quos minima."),

("portifolio-4","Card 2", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia consequatur nam tempore quae adipisci velit sed? Dolores neque porro ut harum voluptas? Ullam, aperiam. Eius nesciunt ea consequatur labore quia."),

("portifolio-5","Web 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque explicabo deserunt error magnam ea optio quaerat in at harum rem! Quisquam illo fuga odit labore id odio alias doloribus explicabo."),

("portifolio-6","App 3", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eaque culpa itaque corporis reprehenderit quasi, ex beatae, nihil voluptatibus repellat aspernatur ad, minus exercitationem doloribus ullam modi corrupti nostrum. Est!"),

("portifolio-7","Card 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repudiandae perferendis quisquam deleniti ratione exercitationem iure? Sed voluptates vitae aperiam deserunt earum molestiae dolor suscipit autem? Debitis minus blanditiis alias."),

("portifolio-8","Card 3", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius dolores dolor magni quos, fugiat facere ratione doloribus inventore, a officia quam ea odio odit deleniti dicta atque temporibus? Ad, officia."),

("portifolio-9","Web 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique distinctio excepturi voluptatibus magni maxime repellendus odit aspernatur voluptates eos. Error ipsam alias provident, fugit consequuntur eos culpa id veniam itaque?");