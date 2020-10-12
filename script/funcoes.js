    function exibir_categoria(categorias)           //(categoria)categoria está sendo recebida
    {
        //alert(categorias);                        //alerta criado para saber se esta funcionando e ao mesmo tempo exibe a categoria
        let elementos = document.getElementsByClassName('box_produto');//pegou todos os elementos dom box_produto (box_produto nome da classe) 
        console.log(elementos);                     // verifica no console se pegou os elementos
        for(var i=0; i<elementos.length; i++)
        {
            console.log(elementos[i].id); 
            if(categorias == elementos[i].id)       //o indice é o i e queremos exibir o elemento que acabamos de criar
            elementos[i].style =  "display:block";  // exibindo elementos
            else
            elementos[i].style ="display:none";      //esse comentario é todo o codigo obs quando click ele passa como parametro a categoria a função recebe esse parametro busca todos os produtos da mesma classe e faz uma iteração nesses produtos começando do 0 até o ultimo
        }
    }

    let exibir_todos = () =>                      //modelo arrow function codigo de cima colado embaixo
    {
        let elementos = document.getElementsByClassName('box_produto');

        for(var i=0; i<elementos.length; i++)
        {
            elementos[i].style =  "display:block";//todas de display block
        }
    };

    let destaque = (imagem) => {                 //arrow function o parametro é o elemento imagem
            console.log(imagem);                 //verificando se a imagem está abrindo
            if(imagem.width == 200)              //se o tamanho for igual a 200 repare o sinal ==
                imagem.width = 150;              //então ele volta a 150
            else                                 //senão ele fica com 200 de tamanho
                imagem.width = 200;
    };
    