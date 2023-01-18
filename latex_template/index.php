<html>
    
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script type="text/javascript" async
          src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
        </script>

    	<script type="text/x-mathjax-config">
        
            MathJax.Hub.Config({
                
                tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
              
            });
            
            MathJax.Hub.Config({
            
                tex2jax: {displayMath: [['$$','$$'], ['\\[','\\]']]}
              
            });
            
        </script>
        
        <link rel="stylesheet" href="styles/styles.css">
        
        <title> Latex Template </title>
    
    </head>
    
    <body>

        <div class="article">
            
            <br>

            <hr>

            <div class="header">
                
                <br>
                
                Author Name
                <!--FJ Wessels-->
                
                <br>
                <br>
                
                Insitution Name
                <!--University of Johannesburg-->
                
                <br>
                
                <br>
                
                <?php echo date('Y/m/d'); ?>
                
                <br>
                <br>
                
                <span class="big_latex"><span class="latex">L<sup>a</sup>T<sub>E</sub>X</span></span>
                
                <br>
                
            </div>
            
            <br>
            
            <hr>

            <div class="abstract">
                
                <br>
                
                <h2>Abstract</h2>
                
                <p>
                    This is a template for writing <span class="small_latex"><span class="latex">L<sup>a</sup>T<sub>E</sub>X</span></span> in the browser. Most of the information in this documnet should be copied and pasted as is and very little modification regarding the style of the page itself, needs to be done. This project aims at standardising document markup for everyone, including those who do not know how to use <span class="small_latex"><span class="latex">L<sup>a</sup>T<sub>E</sub>X</span></span>.
                    
                    <!--This project is a collection of fascinating results, application and theory in the subject of Logic. It serves as a detailed guide on using the book called <i>An Introduction to Mathematical Logic</i> by Richard E. Hodel. This project also tries to fill in a lot of details and simplify a lot of the concepts to the reader. The relationship with other theories are also explored in great detail.-->
                </p>
            </div>
            
            <br>
    
            <hr>
            
            <div role="navigation" class="toc">
                <h2>Contents</h2>
                <ol>
                    <li> <a href="chapter_0_introduction.php"> Chapter 0 </a> </li>
                    <li> <a href="chapter_1_philosophy.php"> Chapter 1 </a> </li>
                    <li> <a href="chapter_2_algebra_of_reasoning.php"> Chapter 2 </a> </li>
                    <li> <a href="#chapter_3_set_theory"> Chapter 3 </a> </li>
                    <li> <a href="#chapter_4_metalogic"> Chapter 4 </a> </li>
                    <li> <a href="#chapter_5_proof_techniques"> Chapter 5 </a> </li>
                    <li> <a href="#chapter_6_propositional_logic"> Chapter 6 </a> </li>
                    <li> <a href="#chapter_7_first_order_logic"> Chapter 7 </a> </li>
                </ol>
            </div>
            
            <br>
                    
            <hr>
            
            <div class="introduction">
                <h2>Introduction</h2>
                <p>
                    This is an introduction. 
                    
                    <!--This project is a collection of fascinating results, application and theory in the subject of Logic. It serves as a detailed guide on using the book called <i>An Introduction to Mathematical Logic</i> by Richard E. Hodel. This project also tries to fill in a lot of details and simplify a lot of the concepts to the reader. The relationship with other theories are also explored in great detail.-->
                </p>
            </div>
            
            <div class="chapter">
                
                <h1> Chapter 1 </h1>
                <p> ... </p>
                
                <div class="section">
                    <h3> Section 1 </h3>
                    <p> ... </p>
                </div>
                
            </div>
            
            <div class="definition">
                <p>
                    A set $C$ is <i>convex</i> if for all
                    $x,y \in C$ and for all
                    $\alpha \in [0,1]$ the point
                    $\alpha x + (1-\alpha) y \in C$.
                </p>
            </div>
            
            <div class="theorem">
                <p>
                    This is a theorem
                </p>
            </div>
            
            <div class="example">
                <p>
                    This is an example
                </p>
            </div>

            <div class="countertheorem">
                <p> 
                    This is a counter theorem
                </p>
            </div>
            
            <div class="lemma">
                <p>
                    This is a lemma
                </p>
            </div>
            
            <div class="proof">
                <p>
                    This is a proof. The proof starts with a simple assumption and then uses logical reasoning to arrive at the conclusion. Different techniques of reasoning may be employed when trying to prove a specific statement. Rules of inference include Modus Ponens, Modus, Tollens, etc.
                </p>
            </div>
            
            <div class="corollary">
                <p>
                    This is a corollary
                </p>
            </div>
            
            <br>
            <br>
            
            <div class="beamertheorem">
                <p>
                    This is a beamer theorem
                </p>
            </div>
        
        </div>
    
    </body>
    
</html>