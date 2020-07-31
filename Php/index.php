<?php 

$alKalamou = string("");

if(isset($alKalamou))
{
    if($alKalamou !== $alHarfou)
    {
        if($alKalamou == $alIsmou)
        {
            switch($alIsmou)
            {
                case $arRaf_ou:
                {
                    echo "li raf_ou arba'atou alamatou";
                }
                
                case $anNasbou:
                {
                    echo "li nasbou";
                    
                }
                    
                case $alKhafdou:
                {
                    echo "lil khafdou";
                    
                }
            }
        }

        if($alKalamou == $alFi_lou)
        {
            switch($alFi_lou)
            {
                case $arRaf_ou:
                {
                    echo "li raf_ou arba'atou alamatou";
                    
                }
                
                case $anNasbou:
                {
                    echo "an Nasbou";
                    
                }
                    
                case $alJazmou:
                {
                    echo "al Jazmou";
                    
                }
            }
        }
    }
    else
    {
        echo "ja-a al harfou li ma°na";
    }
}
else
{
    echo "al kalamou houwa al lafdou, al mourakab, al moufidou bi al wad°i.";
}
?>