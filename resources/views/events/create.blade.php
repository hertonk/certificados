<style>
    label {
        display: block;
    }
</style>

<h1>Cadastro de Eventos</h1>

<form action="/event/store" method="post">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" placeholder="Nome do Evento" />
    <label for="logo">Logo:</label>
    <input type="file" name="logo" />
    <label for="local">Local:</label>
    <input type="text" name="local" placeholder="Local do Evento" />
    <label for="date">Data:</label>
    <input type="text" name="date" placeholder="Período do Evento" />
    <label for="bg">Background do Certificado:</label>
    <input type="file" name="bg" />
    <label for="city">City:</label>
    <input type="text" name="city" placeholder="Nome da Cidade" />
    <label for="state">State:</label>
    <input type="text" name="state" placeholder="Estado da Cidade" />

    <input type="submit" value="Salvar" />
</form>