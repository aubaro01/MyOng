<form action="{{ route('funcionarios.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf" required>
    <button type="submit">Salvar</button>
</form>