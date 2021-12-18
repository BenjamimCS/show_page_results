## 🏝 **Iae, pessoal?**
<img src="https://analyticsindiamag.com/wp-content/uploads/2018/12/programming.gif" align="right" width="400">
Tava já um tempo tenando fazer um sistema que mostre dinâmicamente o que contém num diretório, então decidir fazer. Mas quem disse que seria tão fácil assim?  
Tive a ideia acho que há dois meses e só consegui pra agora no Natal.  
E bem, por vencer essa luta, decidi postar por aqui esse <i>script</i> pra dá uma  
ideia e até ajudar mesmo.

### 📕**Descrição**
Esse *script* é destinado para exibir os conteúdos de uma aba. Por exemplo, temos a aba artigos,
então nesse diretório teremos arquivos referentes a ela, que é isso que esse script faz:  
ele ler os arquivos da página e exibe um breve <i>preview</i> dele.

### 📃**NOTAS**
- **A versão do PHP usada foi a versão 7.1.3.**
- **Ele não usa banco de dados ou coisa do tipo, é só php mesmo.**
- Ele lê apenas arquivos `.html`, mas você pode mudar isso nas condições.

- Você pode usar o DOM para selecionar mais tags se quiser, nesse caso ele só seleciona o `<h1>`,  
`<h2>` e o primeiro `<p>`dos arquivos e os armazena em variáveis.
  - Eles são selecionados por `IDs`, mas você também pode usar por `ByTagName` entre outros.  
  Recomendo que veja a [documentação do PHP DOM](https://www.php.net/manual/en/book.dom.php "PHP: DOM - Manual")
  caso não entenda muito.

- Nos <i>previews</i> é sempre notado que o texto da amostra não está completo, esse também faz isso,  
e você também pode mudar o tamanho ou até tirar isso, por mais que não fique legal.  
Vai por sua escolha.

- Também tem a função de remover qualquer espaço ao final da amostra e adicionado o sinal de reticências,  
pra poder deixar aquele sentido de algo continuando.

- Além do *script* tem também uma breve página de demonstração.

- O código tá bem documento — *acho que até demais*.

### 📃**Notas Finais**
Decidi publicar esse código pra galera que tá começando — *como eu* — ou que tenha um interesse  
em algo do tipo. Espero que possa ajudar.

Ainda não tenho um alto conhecimento na linguagem nem em Banco de Dados, então pensei em ser possível  
e realmente foi, por mais que na última vez eu pensei que só seria possível com Banco de Dados, mas algo  
que eu não lembro me fez retornar.

O DOM do PHP não ajudou muito, então tive que pesquisar um pouco mais pra descobrir o que tava de errado  
no código. Na verdade tava tudo certo, o PHP só não lida muito bem com ele mesmo, mas isso foi resolvido.

### Vindo aí
- Um preview mostrando-o em execução
- Alguns Tópicos de Verdade
