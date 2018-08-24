1) O que é o NPM?
NPM é um gerenciador de dependências. Com esse comando é criado o node_modules onde existem pacotes que instalamos e poderão ser utilizados no projeto

2) Para que serve o nodemon?
Nodemon é um pacote que faz com que não precisamos reiniciar o servidor quando tem uma alteração

3) Qual a ﬁnalidade do comando -- save que inserimos ao ﬁnal de uma instrução?
O comando --save serve para salvar aquele pacote no projeto. Como utilizamos o node_modules, é possível que instalamos alguns pacotes e quando esse projeto é transferido para outra pessoa, não fica salvo. Com o --save aquele pacote que foi instalado fica vinculado ao projeto, então mesmo que esse arquivo seja transferido, os pacotes permanecerão no node_modules.

4) Por que utilizamos arquivos EJS?
O EJS é uma funcionalidade da VIEW. Como estamos utilizando o node, o ejs tem como finalidade fazer o vinculo entre o back e o front. Tem uma funcionalidade parecida com o jsp do Java. Uma vez que quando trazemos dados do back para a view utilizamos o %.

5) Qual a deﬁnição do CommonJS
Common js é uma função para trabalharmos em módulos. Em todos os projetos quando criamos módulos próprios é necessário utilizar o module.exports que tem como função chamar esse módulo para a aplicação </p>