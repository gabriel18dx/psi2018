<p><a href="<?= base_url('curso/cadastrar')?>">Adicionar novo</a></p>

<?php
    
    foreach ($cursos as $c){
        echo $c->nome." - ".$c->descricao;
        $link = base_url('curso/excluir/'.$c->id);
        echo "<a href='".$link."'>Excluir</a>";
        $link = base_url('curso/detalhes/'.$c->id);
        echo " - <a href='".$link."'>Detalhes</a>"; 
        $link = base_url('curso/editar/'.$c->id);
        echo " - <a href='".$link."'>Editar</a><br/>";
    }

