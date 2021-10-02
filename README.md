# Catalogo de Dispositivos

Projeto antigo feito como atividade avaliativa para uma das disciplinas do meu curso técnico.

O projeto consiste em uma aplicação simples, utilizando HTML, CSS e uma simples página de cadastro usando php.

Além disso foi utilizado o seguinte template: Spatial encontrada no site "https://templated.co/" - (O site atualmente está indisponível)

#### Na página cadastro, foi usado as 4 operações básicas:

- CREATE
- READ
- UPDATE
- DELETE

#### Tabela usada:

```
create table Dispositivos (
	codigo INTEGER PRIMARY KEY NOT NULL,
	nome VARCHAR(255) NOT NULL,
	marca VARCHAR(30) NOT NULL,
	tipo VARCHAR(23) NOT NULL,
	caracteristicas VARCHAR(23) NOT NULL,
	descricao VARCHAR(500) NOT NULL
);
```




