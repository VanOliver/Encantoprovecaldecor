<!DOCTYPE html>
<html>
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
    <body>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
    <fieldset>
        <legend><?php echo ($tarefa['id'] > 0) ? '&#9989 Atualizar Tarefa' : '&#128151 Cadastrar Novo Fornecedor' ?></legend>
        <label>
            Fornecedor:
            <?php if($tem_erros && array_key_exists('nome',$erros_validacao)) : ?>
                <span class="erro">
                    <?php echo $erros_validacao['nome']; ?>
                </span>
            <?php endif; ?>
            <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>">
        </label>
        <label>
            Produto:
            <textarea name="descricao"><?php echo $tarefa['descricao']; ?></textarea>
        </label>
        <label>
            Prazo (Obrigatório):
            <?php if($tem_erros && array_key_exists('prazo',$erros_validacao)) : ?>
                <span class="erro">
                    <?php echo $erros_validacao['prazo']; ?>
                </span>
            <?php endif; ?>
            <input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
        </label>
        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?>>Baixa
                <input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?>>Média
                <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?>>Alta
            </label>
        </fieldset>
        <label>
            Entrega Concluída:
            <input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?>>
        </label>
        <input type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar' ?>">
    </fieldset>
</form>
</body>
</html>