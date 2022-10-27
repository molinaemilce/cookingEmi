<?php

class ControladorHome{

    public function getHome(){
        include "./vista/index.php";
    }
    public function beneficios($tipoBeneficio){
        switch ($tipoBeneficio) {
            case '1':
                $descripcion = "<p>
                En muchos restaurantes, pero especialmente en los de comida rápida que reparten a domicilio, los alimentos son altos en azúcares, grasas, sodio y carbohidratos, incluidas sus opciones más saludables. <br>
                Al comer en casa está en tu mano reducir lo que consideres innecesario en tu dieta, especialmente los azúcares, las grasas o la sal. Tienes un control mucho más real de lo que comes.
                </p>";
                echo $descripcion;
                break;
            case '2':
                $descripcion = "<p>
            La comida es mucho más que algo que sabe bien y llena tu estómago. Es uno de los pilares para una vida sana. Cocinar tus propios alimentos, si además tratas de informarte sobre ellos, te ayudará a aprender qué alimentos tienen más contenido en nutrientes como hidratos, proteínas, vitaminas y minerales entre otros. <br>
            Además, cocinar puede ser un arte que te ayude a desarrollar tu creatividad, probando recetas y combinando ingredientes para satisfacer tu paladar.
            </p>";
                echo $descripcion;
                break;
            case '3':
                $descripcion = "<p>
                En muchos restaurantes las raciones de comida son excesivas, y eso aumenta los riesgos de sobrepeso porque tendemos a comernos siempre lo que nos ponen en el plato. <br>
                Si tu cocinas y sirves tu comida, es muy más fácil que controles las cantidades de lo que comes sin quedarte con hambre, evitando el riesgo de comer demasiado.
                </p>"; 
                echo $descripcion;
                break;
            case '4' :
                    $descripcion = "<p>
                    Comer fuera o pedir comida a domicilio es muy más cómodo y rápido, sí, pero también sale considerablemente más caro que comer en casa. <br> Si además te organizas de forma que prepares comida para llevarte a trabajar, y aprendes a aprovechar los restos de un plato para hacer otro sin desperdiciar nada, tu hucha lo notará a fin de mes. 
                    </p>"; 
                    echo $descripcion;
                break;
        }
    }

}

?>