@extends('layouts.app')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Hello World</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                        reprehenderit ipsa saepe autem, aspernatur nihil laudantium eius accusamus, est esse id iusto
                        magni voluptatum at voluptates sapiente. Architecto, optio rerum!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Mission</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                        quod, earum ducimus aut iure sint beatae vero, suscipit quis hic soluta blanditiis illo harum
                        repellat quo recusandae, magnam atque eos!</p>
                    <h2 class="text-white mt-0">Vision</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                        quod, earum ducimus aut iure sint beatae vero, suscipit quis hic soluta blanditiis illo harum
                        repellat quo recusandae, magnam atque eos!</p>

                    <hr class="divider divider-light" />
                    <h2 class="text-white mt-0">History</h2>
                    <p class="text-white-75 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                        quod, earum ducimus aut iure sint beatae vero, suscipit quis hic soluta blanditiis illo harum
                        repellat quo recusandae, magnam atque eos!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023</div>
        </div>
    </footer>
@endsection
