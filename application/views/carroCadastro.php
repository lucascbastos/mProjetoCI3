<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
        <h1>Cadastro de Carros</h1>
        <?php echo form_open('carro/inserir'); ?>
            <input type="text" required placeholder="Marca aqui..." name="marca"/>
            <br><br>
            <input type="text" required placeholder="Modelo aqui..." name="modelo"/>
            <br><br>
            <input type="number" required placeholder="Portas aqui..." name="portas"/>
            <br><br>
            <input type="color" required placeholder="Cor aqui..." name="cor"/>
            <br><br>
            <input type="text" required placeholder="Placa aqui..." name="placa"/>
            <br><br>
            <input type="text" required placeholder="idPessoa aqui..." name="idPessoa"/>
            <br><br> 
            <input type="submit" value="Salvar" name="salvar">
            <input type="reset" value="Limpar" name="limpar">
            
        <?php echo form_close(); ?>
        <h2>Lista de Carros</h2>
        <table>
            <thead>
                <tr>
                    <th>Marca</th><th>Modelo</th><th>Portas<th>Cor</th><th>Placa</th><th>idPessoa</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carros as $carro): ?>
                <tr>
                    <td><?php echo $carro->marca; ?></td>
                    <td><?php echo $carro->modelo; ?></td>
                    <td><?php echo $carro->portas; ?></td>
                    <td><input type="color" disabled value="<?php echo $carro->cor; ?>"/></td>
                    <td><?php echo $carro->placa; ?></td>
                    <td><?php echo $carro->idPessoa; ?></td>
                    <td>
                       <a href="<?php echo base_url() .
                                'carro/editar/' . 
                                $carro->idCarro; ?>" >Editar</a> | 
                        <a href="<?php echo base_url() .
                                'carro/excluir/' . 
                                $carro->idCarro; ?>" >Deletar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
