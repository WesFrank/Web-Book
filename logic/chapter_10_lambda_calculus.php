<html lang="en">

    <head>
        
        <?php
        
            include "metacontent.php";
        
        ?>
        
        <title> Logic </title>
    
    </head>
    
    <body>

        <div class="article">

            <br>
    
            <hr>
            
            <?php
            
                include "table_of_contents.php";
            
            ?>
                    
            <hr>

            <div class="chapter">

                <h1> &lambda; Calculus </h1>
            
                <p> λ calculus/combinatorial logic </p>
                
                <p> λ calculus is a powerful expressive logic/paradigm in which statments are often defined/analysed as a function or in terms of functions. </p>
                
                <p> λ calculus seems like a complicated topic but is, in fact, as elegant and simple as any algebra or other similar/related concepts in mathematics with rules and procedures. </p>
                
                
                <br>
                
                
                <h1> Bound versus Free Variables </h1>
                
                <p>A bound variable ... </p>
                
                <p>A free variable ... </p>
                
                
            
                <h1> &beta; Reduction </h1>
                
                <p> One of it's key features is the concept of β reduction which simplifies sentences written in this λanguage. </p>
                
                <p> β reduction is the process of determining/simplifying the function's output as much as possible for any given expression. </p>
                
                
                <br>
                
                
                <h1> &alpha; Equivalence </h1>
                
                <p> Two expressions/terms in the λ calculus are said to be &alpha; &nbsp; equivalent if and only if one can be converted into the other purely by renaming bound variables  </p>
                
                
                <br>
                
                
                <h1> &lambda; Calculus as a Programming Language </h1>
                
                <p> The λ calculus is the metaframework in which to define/analyse sentences/functions using λ notation (grammar/rules). </p>
                
                <p> The λ calculus is sometimes referred to as <i>combinatorial logic</i> or <i>functional programming</i>. </p>
                
                <p> JavaScript function notation can be used to simulate the λ calculus. </p>
                
                <p> Apparently, python can also be used to model the various combinators in λ calculus. </p>
                
                <p> We try to explore all possibilities ... </p>
                
                
                <br>
                
                // IDENTITY OPERATOR

                // Material Implication
                
                // "To Invoke an Argument"/"To Declare it's Existence"
                
                <script>
                    
                    console.log("Identity Combinator");
                    
                    console.log("> const I = a => a");
                    
                    I = a => a
                    
                    console.log(I)
                    
                    console.log(I(I))
                    
                    console.log(I(I(I)))
                    
                </script>
                
                
                <h1> &lambda; Combinators </h1>
                
                <p> Definition of True/False </p>
                
                <p> Negation </p>
                
                <p> Commutation </p>
                
                <p> We try to explore all possibilities ... </p>
                
                
                <br>
                
                
                <h1> &lambda; Calulus from a Group Theorists Point of View </h1>
                
                <p> Permutations </p>
                
                <p> Cyclic Groups </p>
                
                <p> Dihedral Groups </p>
                
                <p> We try to explore all possibilities ... </p>
                
                
                <br>
                
                
                <h1> &lambda; Calulus as an Alternative for Set Theory </h1>
                
                <p> Definition of True/False </p>
                
                <p> Negation </p>
                
                <p> Commutation </p>
                
                <p> We try to explore all possibilities ... </p>
            

                <br>
                
                <br>
                
                <br>
                
                <br>

            </div>

        </div>

    </body>

</html>