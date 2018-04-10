<DOCTYPE! html>
    <html lang="pt-BR">

    <head>
        <title>php</title>
        <meta charset="utf-8">
        <meta name="keywords" content="sistema de adição de produtos">
        <meta name="viewport" content="width=device-width, intiial-scale = 1.0">
        <link rel="stylesheet" href="CSS/normalize.css">
        <link rel="stylesheet" href="CSS/principal.css">
    </head>

    <body>
        <header>
        </header>
        <main>
            <section>
                <a href="#">Adicionar produtos</a>
                <a>Editar produtos</a>
                <a>Remover produtos</a>
            </section>
            <section>
                <form action="adiciona-produto.php" method="post">
                    <fieldset>
                        <legend>Dados do Produto</legend>
                        <label for="nome">Nome </label>
                        <input name="nome" type="text">
                        <label for="preco">Preço</label>
                        <input name="preco" type="text">
                    </fieldset>
                    <button type="submit">Cadastrar</button>
                </form>
            </section>
        </main>
        <footer>footer</footer>
    </body>

    </html>
