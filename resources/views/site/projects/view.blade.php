@extends('site.include.body')

@section('header')
    <title>Portal de Serviços — Detalhes do Projeto</title>
    <meta name="description" content="Detalhes do projeto Portal de Serviços – Prefeitura de Peruíbe, desenvolvido por Bruno Roberto." />
@endsection

@section('content')
    <main id="main">
        <!-- Hero -->
        <section class="py-5 text-center">
            <div class="container">
                <h1 class="display-5 fw-bold">Portal de Serviços – Prefeitura de Peruíbe</h1>
                <p class="lead text-light-secondary mb-4">Plataforma para acesso rápido a informações de serviços e secretarias municipais.</p>
                <a href="../../index.html#projetos" class="btn btn-primary">Voltar ao Portfólio</a>
            </div>
        </section>

        <!-- Description -->
        <section class="py-5 bg-dark bg-opacity-50">
            <div class="container">
                <h2 class="h4 mb-3">Descrição do Projeto</h2>
                <p class="text-light-secondary">O Portal de Serviços foi criado para facilitar o acesso dos munícipes às cartas de serviço, secretarias e órgãos da Prefeitura de Peruíbe. O projeto oferece navegação clara, layout responsivo e sistema de gerenciamento interno para atualização de informações de forma prática e segura.</p>
                
                <h3 class="h5 mt-4">Tecnologias Utilizadas</h3>
                <ul class="text-light-secondary">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Bootstrap 5</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Laravel</li>
                </ul>

                <h3 class="h5 mt-4">Link do projeto</h3>
                <a href="https://servicos.peruibe.sp.gov.br/" class="text-light-secondary">https://servicos.peruibe.sp.gov.br/</a>
            </div>
        </section>

        <!-- Images -->
        <section class="py-5">
            <div class="container">
                <h2 class="h4 mb-4 text-center">Capturas de Tela</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <img src="../../assets/servico_prints/pagina_cartas_servico.png" class="img-fluid rounded-4 shadow-sm" title="Tela inicial do Portal de Serviços" alt="Tela inicial do Portal de Serviços">
                    </div>
                    <div class="col-md-6">
                        <img src="../../assets/servico_prints/pagina_cartas_alto_contrastre.png" class="img-fluid rounded-4 shadow-sm" title="Tela inicial do Portal de Serviços com opcao de alto contraste" alt="Tela inicial do Portal de Serviços com opcao de alto contraste">
                    </div>
                    <div class="col-md-6">
                        <img src="../../assets/servico_prints/pagina_secretarias.png" class="img-fluid rounded-4 shadow-sm" title="Tela de secretarias do Portal de Serviços" alt="Tela de secretarias do Portal de Serviços">
                    </div>
                    <div class="col-md-6">
                        <img src="../../assets/servico_prints/pagina_secretarias_alto_contraste.png" class="img-fluid rounded-4 shadow-sm" title="Tela de secretarias do Portal de Serviços com opcao de alto contraste" alt="Tela de secretarias do Portal de Serviços com opcao de alto contraste">
                    </div>
                    <div class="col-md-6">
                        <img src="../../assets/servico_prints/pagina_servico.png" class="img-fluid rounded-4 shadow-sm" title="Tela do servico 'Abertura de Escola de Educacao Infantil (Particular)'" alt="Tela do servico 'Abertura de Escola de Educacao Infantil (Particular)'">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')

@endsection