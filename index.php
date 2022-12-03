<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Skyview Pollution</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="aaa.js"></script>
    </head>
    <header class="topo" style="height: 100px; width: 100%; background-color: darkblue; border-bottom: 3px solid yellow;">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <h3 class="title" style="margin-left: 30%; color: yellow; font-family: fantasy; font-size: 50px; margin-top: 17px;">SKYVIEW POLLUTION</h3>
        </div>
    </header>

    <body>
        <div class="skyview">
            <img id="img1" src="img/poasky.png">
            <img id="img2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/A_black_image.jpg/640px-A_black_image.jpg">
        </div>

        <div class="slidecontainer">
            <input type="range" min="1" max="100" value="100" class="slider" id="filtro" onchange="trocaImagem()" >
        </div>

        <div class="fullscreen">
            <b><a class="fullscreenbtn" href="fullscreenmode.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-fullscreen" viewBox="0 0 16 16">
                <path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
            </svg></a></b>
        </div>

        <div class="info">
            <h3>A Atmosfera</h3>
            <p>Ao longo do dia, pouco percebemos como a poluição presente no nosso ar e em todas as camadas da nossa atmosfera afetam a forma como enxergamos o céu. Cada vez mais, os índices de emissão de gases poluentes aumentam, omitindo gradativamente os astros que costumávamos enxergar no passado. Cientistas apontam que possa ser possível enxergar em torno de 10.000 estrelas ao redor de todo o globo, entretanto, devido a fatores como principalmente a poluição luminosa, esse valor pode ser cortado por até mais da metade dependendo da região. Por isso, locais mais rurais tendem a apresentar um céu “mais bonito” que locais mais urbanizados, como o Deserto do Atacama, por exemplo, onde é possível ver até mesmo a Via Láctea.</p>
            <img id="comparison" src="https://t.ctcdn.com.br/N5vZp8W8K-tlTwjQT0nXk4GM1D8=/660x0/smart/i299865.png">
            <h10 style="color: white; margin-left: 35%;">fonte: CDN</h10>
            <p>Essa poluição provém do uso excessivo de fontes de luz artificiais nas grandes cidades, que ofuscam o brilho das estrelas e outros astros. A explicação para isso é o fenômeno chamado <i>“SkyGlow”</i>, onde os postes e prédios iluminados atuam obstruindo a visualização do céu além dos limites do nosso planeta, como o Sol durante o dia. O Centro Nacional de Informações Ambientais dos EUA aponta que aproximadamente 80% do mundo inteiro sofre deste problema e por isso é incapaz de enxergar a nossa galáxia e os seus braços, sendo o foco disso regiões mais desenvolvidas como os Estados Unidos e a Europa.</p>
            <img id="lightpollution" src="https://brilliantmaps.com/wp-content/uploads/2015/03/world-light-pollution-600x354.png?p=640">
            <h10 style="color: white; margin-left: 26%;">fonte: BRILLIANT MAPS</h10>
            <h3>A Poluição</h3>
            <p>O resultado de tudo isso é um aumento exponencial da poluição atmosférica, pois uma maior densidade populacional proporciona uma exploração gradativamente maior dos recursos de um local e as necessidades do desenvolvimento urgente determinam padrões insustentáveis para o bem ambiental estabelecendo tecnologias severamente degradantes para o mundo, que vão muito além do simples aumento da iluminação, como a queima indevida de recursos minerais, o descarte indevido de lixo e o desmatamento, como apresentado nos gráficos abaixo da BBC quanto ao território nacional. </p>
            <img id="desmatamento" src="https://conteudo.imguol.com.br/c/noticias/9a/2022/11/15/fonte-inpesistema-prodes-1668516890468_v2_750x421.jpg.webp">
            <img id="carbono" src="https://conteudo.imguol.com.br/c/noticias/f8/2022/11/15/brasil-registrou-em-2021-maior-emissao-de-co2-desde-2005-boa-parte-da-poluicao-vem-do-desmatamento-e-uso-do-solo-mas-maior-utilizacao-de-fontes-sujas-de-energia-no-ano-passado-tambem-ajudou-a-piorar-1668517151949_v2_750x421.jpg.webp">
            <img id="queima" style="margin-bottom: 0.1%;"src="https://conteudo.imguol.com.br/c/noticias/da/2022/11/15/focos-de-incendio-contabilizados-ate-agora-em-2022-ja-somam-mais-que-o-registrado-em-2021-em-2020-brasil-registrou-maior-patamar-de-incendios-em-10-anos-1668517275615_v2_750x421.jpg.webp">       
            <h10 style="color: white; margin-left: 35%;">fonte: UOL</h10>
            <p>A composição da atmosfera por estes gases considerados “nocivos”, se, de forma controlada, tornam-se essenciais na manutenção da Camada de Ozônio, dentre estes pode ser citado o próprio gás ozônio, o dióxido de carbono, o óxido nitroso e o metano, além do vapor de água. Entretanto, sua produção excessiva se torna um agravante para o efeito estufa, desencadeando o aquecimento global. Então, dessa forma é possível traçar um paralelo entre todos esses tópicos, um se apresentando como um indicativo do outro.</p>        
            <h3>Os Problemas</h3>
            <p>Se os gases são como reguladores da nossa atmosfera, quando estes estão desregulados, ocasionam problemas imensuráveis para todo o planeta. O ozônio por sua vez é responsável por absorver os raios ultravioletas do Sol, protegendo a vida na Terra, por outro lado, com a Camada de Ozônio em seu estado atual, esses raios acabam por atravessá-la apresentando índices nunca antes vistos e podendo causar doenças cancerígenas a quem não se protege devidamente. Além disso, a temperatura sofre um aumento exponencial e irregular, tranformando os habitats de diferentes espécies, colocando muitas em risco de extinção e acarretando no derretimento das geleiras, aumentando o nível do mar e apenas agravando ainda mais a já crítica situação. Veja alguns destes dados nos gráficos abaixo:</p>
            <h6 style="margin-top: 1%;">Aumento do índice UV</h6>
            <img style="margin-bottom: -0.1%;" id="indiceuv" src="https://metsul.com/wp-content/uploads/2022/11/uv1.jpg">
            <h10 style="color: white; margin-left: 35%;">fonte: METSUL</h10>
            <h6 style="margin-top: 1%;">Concentração de ozônio na atmosfera</h6>
            <img style="margin-bottom: -0.1%;" id="ozonio" src="https://img.imageboss.me/revista-cdn/cdn/29384/3fc21ed7168a42cc4820b1308868fd516c27703e.png?1589491897">        
            <h10 style="color: white; margin-left: 35%;">fonte: CDN</h10>
            <h6 style="margin-top: 1%;">Derretimento das geleiras</h6>
            <img style="margin-bottom: -0.1%;" id="geleiras" src="https://s2.glbimg.com/FQtOPxVZm5immyuGbtpr5kLze58=/620x350/e.glbimg.com/og/ed/f/original/2021/04/15/sem_titulo.png">       
            <h10 style="color: white; margin-left: 35%;">fonte: OGLOBO</h10>
        </div>
    </body>
    <footer>
        <div id="sobre">
            <h5>Sobre nós</h5>
            <h8>Somos alunos do Senac Distrito Criativo e formamos uma equipe inspirada em fazer a diferença no mundo e passar um pouco do nosso conhecimento para as pessoas ao nosso redor.</h8>
        </div>
        <div id="name">
            <h4 style="color: yellow; font-family: fantasy; text-align: center;">SKYVIEW</h4>
            <h4 style="color: yellow; font-family: fantasy; text-align: center;">POLLUTION</h4>
        </div>
        <div id="time">
            <h5>Quem somos?</h5>
            <h8><a style="color: white;" target="_blank" href="https://www.instagram.com/aninha.ramos_/">Ana Carolina</a></h8>
            <br>
            <h8><a style="color: white;" target="_blank" href="https://www.instagram.com/leo_campooss/">Leonardo Campos</a></h8>
            <br>
            <h8><a style="color: white;" target="_blank" href="https://www.instagram.com/thiago_schiedeck/">Thiago Schiedeck</a></h8>
        </div>
    </footer>
</html>