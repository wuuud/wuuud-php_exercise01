<?php 

function self_introduction($skills, $likes){
    $skills_quantities = count($skills);
    $likes_quantities  = count($likes);
    $all_skills = implode('、' , $skills);
    $all_likes  = implode('、' , $likes);

    return <<<END
    私の特技は{$skills_quantities}個あり、{$all_skills}です。<br>
    また、趣味は{$likes_quantities}個あり、{$all_likes}です。<br>
    END;
}


