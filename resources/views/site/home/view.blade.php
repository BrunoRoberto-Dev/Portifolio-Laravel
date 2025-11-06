@extends('site.include.body')

@section('header')
    <title>Portfolio</title>


@endsection

@section('content')
    <!-- Skip link -->
    <a href="#main" class="visually-hidden-focusable position-absolute top-0 start-0 m-2 btn btn-primary">Pular para conteúdo</a>

    <!-- Main -->
    <main id="main">

        <!-- Hero -->
        <section class="py-5 text-center">
            <div class="container">
                <h1 class="display-5 fw-bold">Olá, eu sou <span class="text-primary">Bruno Roberto</span></h1>
                <p class="lead text-light-secondary mb-4">Desenvolvedor web focado em criar interfaces limpas e modernas.</p>
                <div>
                    <a href="#projetos" class="btn btn-primary me-2">Ver projetos</a>
                    <a href="#contato" class="btn btn-outline-light">Contato</a>
                </div>
            </div>
        </section>

        <!-- Sobre -->
        <section id="sobre" class="py-5 bg-dark bg-opacity-75">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-md-4 text-center">
                        <img src="./assets/foto.png" class="rounded-circle img-fluid border border-secondary" alt="Foto do desenvolvedor" width="370" height="180">
                    </div>
                    <div class="col-md-8">
                        <h2 class="h4 mb-3">Sobre mim</h2>
                        <p class="text-light-secondary">Sou um desenvolvedor apaixonado por tecnologia e pela criação de soluções digitais que impactam positivamente o dia a dia das pessoas. Tenho 23 anos e estou finalizando minha graduação em Ciência da Computação. Atuo profissionalmente na área há cerca de 1 ano e 6 meses, com experiência em projetos reais desenvolvidos para a Prefeitura de Peruíbe, que hoje estão em produção e acessíveis ao público.

                            Trabalho com front-end e back-end, sempre buscando unir uma boa experiência visual a um código limpo, eficiente e de fácil manutenção. Acredito que a tecnologia é uma ferramenta poderosa para transformar ideias em resultados concretos, e é isso que me motiva a continuar evoluindo como desenvolvedor.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projetos -->
        <section id="projetos" class="py-5 ">
            <div class="container">
                <h2 class="h4 text-center mb-4">Projetos</h2>
                <div class="row g-4">
                    <!-- Card do projeto Cultura -->
                    <div class="col-md-4">
                        <article class="card bg-dark border-secondary h-100 shadow-sm">
                            <img src="./assets/projeto_cultura.png" class="card-img-top" alt="Captura de tela do Projeto 1">
                            <div class="card-body">
                                <h3 class="h5 card-title text-white">Portal da Cultura – Prefeitura de Peruíbe</h3>
                                <p class="text-light-secondary">Desenvolvimento do Portal da Cultura de Peruíbe, para gestão de notícias e eventos culturais.</p>
                            </div>
                            <div class="card-footer bg-transparent border-top border-secondary d-flex justify-content-between">
                                <a href="./views/projects/cultura.html" class="btn btn-sm btn-primary">Ler Mais</a>
                                
                            </div>
                        </article>
                    </div>

                    <!-- Card do projeto Carta de Servico -->
                    <div class="col-md-4">
                        <article class="card bg-dark border-secondary h-100 shadow-sm">
                            <img src="./assets/projeto_carta_servico.png" class="card-img-top" alt="Captura de tela do Projeto 1">
                            <div class="card-body">
                                <h3 class="h5 card-title text-white">Portal de Serviços – Prefeitura de Peruíbe</h3>
                                <p class="text-light-secondary">Participação no desenvolvimento do Portal de Serviços de Peruíbe, garantindo acesso fácil e moderno às informações públicas.</p>
                            </div>
                            <div class="card-footer bg-transparent border-top border-secondary d-flex justify-content-between">
                                <a href="./views/projects/servicos.html" class="btn btn-sm btn-primary">Ler Mais</a>
                                
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Habilidades -->
        <section id="habilidades" class="py-5 bg-dark">
            <div class="container text-center">
                <h2 class="h4 mb-4">Habilidades</h2>
                <ul class="list-inline">
                    <li class="list-inline-item badge bg-secondary bg-opacity-25 text-light fs-6 p-2 m-1">HTML5</li>
                    <li class="list-inline-item badge bg-secondary bg-opacity-25 text-light fs-6 p-2 m-1">CSS / Bootstrap</li>
                    <li class="list-inline-item badge bg-secondary bg-opacity-25 text-light fs-6 p-2 m-1">JavaScript</li>
                    <li class="list-inline-item badge bg-secondary bg-opacity-25 text-light fs-6 p-2 m-1">PHP / Laravel</li>
                    <li class="list-inline-item badge bg-secondary bg-opacity-25 text-light fs-6 p-2 m-1">PostgreSQL</li>
                </ul>
            </div>
        </section>

        <!-- Contato -->
        <section id="contato" class="py-5">
            <div class="container">
                <h2 class="h4 text-center mb-4">Entre em contato</h2>

                <form action="https://formsubmit.co/brunooroberto.oficial@gmail.com" method="POST" class="mx-auto" style="max-width:600px">
                    <input type="hidden" name="access_key" value="70c20c78-d552-44dc-8d72-f7127942b452">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="name" id="nome" class="form-control bg-dark text-light border-secondary" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control bg-dark text-light border-secondary" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea name="message" id="mensagem" rows="5" class="form-control bg-dark text-light border-secondary" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

                <div class="text-center mt-4">
                    <p class="text-light-secondary mb-1">Email: <a href="mailto:brunooroberto.oficial@gmail.com" class="text-light text-decoration-none">brunooroberto.oficial@gmail.com</a></p>
                    <p class="text-light-secondary mb-1">GitHub: <a href="https://github.com/BrunoRoberto-Dev" target="_blank" rel="noopener" class="text-light text-decoration-none">BrunoRoberto-Dev</a></p>
                    <p class="text-light-secondary">Linkedin: <a href="https://br.linkedin.com/in/brunorobertodev" target="_blank" rel="noopener" class="text-light text-decoration-none">brunorobertodev</a></p>
                </div>
            </div>
        </section>
    </main>

  
    <canvas id="particle-canvas"></canvas>


@endsection

@section('scripts')

@endsection