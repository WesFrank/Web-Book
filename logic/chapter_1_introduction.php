<html lang="en">
    
    <head>
        
        <?php
        
            include "metacontent.php";

        ?>
        
        <title> Logic - Introduction </title>
    
    </head>
    
    <style>
        
        th {
            text-align: left;
        }
        
        img {
            justify-content: center;
            display: block;
            width: 100%;
            height: auto;
        }
        
    </style>
    
    <body>

        <div class="article">

            <br>
    
            <hr>
            
            <?php
            
                include "table_of_contents.php";
            
            ?>
                    
            <hr>

            <div class="chapter">
                
                <h1> Introduction </h1>

                <p>
                    Athens was One of Many Ancient Greek Poleis (plural for Polis [city-state] "Metropolis") a Civilization and Culture so Rich
                    that they had Pondered Ideas beyond their own Imagination. The contributions of the Atheneans and related cultures such as Indo-Arabic, Mesopotamian, Babylonian,
                    Egyptian and later Western Influence has and forever will be seen (by Historians & Scientists) as the Greatest Civilization that has ever Existed. This $\textit{Garden of Eden}$
                    has its Roots in the <a href="https://en.wikipedia.org/wiki/Archipelago">Archipelago</a> right off the East coast of Greece, which you can see on the map below:
                </p>
                    
                <img src="images/chapter_1_introduction/Mediterranean.jpg" />
                
                <p>
                    During a later stage of the Greek civilization, Greece (a network of towns${}^{1}$; see this <a href="list.php">list</a>) was referred to by many as
                    &Epsilon; &lambda; &lambda; &alpha; &sigmaf;
                    [Hellas] (the place of the Hellenists - a culture of people who were mainly worshipers of the sun (Hellios), oceans (Poseidon) and other universal elements.
                    They understood that there were other sources of energy and interaction of objects in our physical realm that we live in that nurture interesting relationships
                    to our understanding of it, distinct from our own minds.
                <p>
                    
                <p style="position: absolute; right: 3%; font-size: small; width: 7%;"> A network of towns: due to the expansion of the trading canal in the Mediterranean Sea</p>
                    
                </p>
                    Their choice of religion was heavily influenced by the Egyptian Calendar System for optimizing their harvests during the agricultural farming process.
                    The Hellenists became known for sharing and collecting knowledge & secrets of the world. Fame and Brilliance of Philosophers such as Plato, Euclid, Archimedes etc are widespread and had an 
                    influential impact on the Ancient Greek civilization, as a culture. This in turn stimulated scientific studies as related disciplines to study phenomena in their respective fields of research.
                    In mathematics, we often attempt to predict certain aspects of life using our capacity for reasoning and observation. Modern day humans do science for much  the same reason as did the Ancient Greeks:
                    
                    $$\text{Activity for Leasure, Practical Purpose}$$
                    
                    for the sake of:

                    $$\text{"discovering something new"}$$
                </p>
                    
                <p>
                    The analysis of though/reasoning/debate/dialgoue/argumentation was a widely & wildly popular activity during the
                    peak of the Athenean culture, especially in their doctrines, where they strived to become more civilized. Hence, the Atheneans
                    were extremely motivated to formalize arguments and systematize reasoning, so as to be able to conclusively decide what is "right" versus
                    what is "wrong". The Atheneans had already largely implemented the ideas of Democracy in Politics, Gymnasia in Athletics, etc.
                    It is evident that Law, Religion, Mathematics, Music and many other disciplines played an important role in shaping the early developments of
                    Philosophy as a whole. Today it is used to implement new ideas in Artificial Intelligence, the main theme of this project.
                </p>
                
                <img src="images/chapter_1_introduction/EuropePolitical.jpg" />
                
                <br>

                <div class="section">

                    <h3> The Laws of Thought </h3>

                    <p>
                        <i>The Laws of Thought</i> listed below are fundamental axiomatic rules upon which rational discourse is based.
                        These rules are fundamental in the sense that they are the simplest, accepted set of rules on which an argument
                        <i>"should be based"</i>. These are also the rules which are widely accepted to be true in the traditional/classical sense.
                    </p>

                    <table style="width:100%">
                        
                      <tr>
                        <th>Axiom</th>
                        <th>Logic</th>
                        <th>Set Theory</th>
                      </tr>
                      
                      <tr>
                        <td>1. Law of Identity</td>
                        <td>$A \rightarrow A$</td>
                        <td>$A \supset A$</td>
                      </tr>
                      
                      <tr>
                        <td>2. Law of Exlcluded Middle</td>
                        <td>$ \neg A \lor A$</td>
                        <td>$A \cup X \setminus A $</td>
                      </tr>
                      
                      <tr>
                        <td>3. Law of (Non-)Contradiction</td>  
                        <td>$ \neg (A \land \neg A) $</td>
                        <td>$ A \cap (X \setminus A) = \emptyset $</td>
                      </tr>
                      
                    </table>

                    <p style="position: absolute; right: 3%; font-size: small; width: 7%;"> This is a sidenote to test how the font will look </p>

                    <p>
                        A&rho;&iota;&sigmaf;&tau;&omicron;&tau;&epsilon;&lambda;&eta;&sigma;</p> was the one who came up
                        who came up with the ideas of what may be important axiomatix assumptions from which all truths can be derived.
                        He suggest that the two major principles of 
                    <p>
                        The modern approach to reasoning is not necessarily so straight forward and may question or even reject some or all of <i>The Laws of Thought</i> listed above.
                        We will investigate these laws one at a time to better clarify and understand their significance.
                        The study of such rules have a long tradition in the history of philosophy and logic and extends to the modern ideas of computer science.
                    </p>

                    <br>

                    <h4> 1. The Law of Identity </h4>

                    <p>
                        <i>The Law of Identity</i> states (in simple English) that "whatever is, is". This may be represented symbolically using logical symbols:
                    </p>

                    $$ A \rightarrow A $$

                    <p>
                        An alternative notation to express <i>The Law of Identity</i> makes use of the symbols of set theory:
                    </p>

                    $$ A \supset A $$

                    <p>
                        The notation $A \supset A$ above, is due to Giuseppe Peano (1858 - 1932) and is interpreted to mean that $A$ is a subset of $A$.
                        For someone familiar with only the basics of set theory, this expression seems "backwards" but is in fact written this way to
                        highlight it's connection to the arrow (implication) notation.
                    </p>
                    
                    <br>                    

                    <h4> 2. The Law of Excluded Middle </h4>
                    
                    <p> 
                        <i>The Law of Excluded Middle</i> is usually voiced in Shakespearen literature by the phrase ":to-be;;or;;not:to-be"
                        and states that for every proposition, either this proposition or its negation is true.
                        
                        symbolically:
                    </p>

                    $$\neg A \lor A$$

                    <p> 
                        Alternatively, we can express <i>The Law of Excluded Middle</i> symbolically using the notation of set theory:
                    </p>
                    
                    $$A \cup X \setminus A$$

                    <br>
                                       
                    <h4> 3. The Law of (Non-)Contradiction </h4>

                    <p>
                       Obviously, two contradictory statements cannot both be true, so we take it as a "law". Symbolically, we can represent this with the expression:
                    </p>

                    $$\neg (\neg A \land A)$$

                    <p>
                       If we wanted to express this law using the symbols of set theory, we would represent this with the expression:
                    </p>

                    $$(A \cap X \setminus A) = \emptyset$$

                    <p>
                        That is to say that $A$ and its complement $X \setminus A$ has nothing in common, i.e. their intersection is the empty set $\emptyset$.
                    </p>

                    <br>
                    
                    <h3>Bivalence, Duality & Complementation</h3>

                    <p>
                        <i>The Principle of Bivalence</i> states that any declarative sentence expressing a proposition has exactly one truth value,
                        either true or false. A system satisfying this principle is called a bivalent or two-valued system.
                    </p>

                    <p>
                        From our previous discussion about <i>The Laws of Thought</i>, we observe that <i>The Duality Principle</i>
                        is "built into" our system of reasoning in the sense that we reserve the capacity to distinguish a certain event
                        from its <i>(complementary) dual</i>. <i>The Duality Principle</i> arises naturally in many mathematical settings and is
                        usually associated with some sort of symmetric phenomena, closely related to the <i>complement</i> of a
                        mathematical object, in the sense that an object together with its complement forms the whole.
                    </p>

                    <p>
                        Sherlock Holmes enunciated that "if you eliminate the impossible,
                        however improbable, what remains, must be the truth". This is suggestive of <i>The Duality Principle</i>,
                        that one or the other must be the case, but not both. <i>The Duality Principle</i> is relevant in other contexts
                        of other mathematical theories, such as Probability Theory, Graph Theory, Abstract Algebra, Linear Algebra,
                        Functional Analysis. Topology, the list goes on ...
                    </p>

                    <h3>Redundancies & Tautologies</h3>

                    <p>
                        It may become apparrent later on that <i>The Law of Identity</i> & <i>The Law of Excluded Middle</i> are equivalent,
                        i.e. $A \rightarrow A \equiv \neg A \lor A$. It may already be apparent to the reader that the expressions for
                        <i>The Laws of Thought</i> are, in fact, what we call, Tautologies, which is a statment that is true regardless of context.
                        A Tautology is true, based merely on the syntactic argument form, rather than the interpretation or meaning of the statement itself.
                    </p>

                    <h3>Metalanguage</h3>

                    <p>
                        Metalanguage pertains to the discourse of the philosophical discussion at hand in an investigatory and interjectory manner.
                    </p>

                    <h3>Expressive Power</h3>
                    
                    <p>
                        Can we really derive all truths from <i>The Laws of Thought</i>?
                        This seems like a Question for the Gods, but in fact, we learn that the answer is trivially disappointing!
                        We need more expressive power over objects to build a strong  basis for reasoning with cour classical rules of inference
                        which in this case is denoted by $\{ \neg, \land, \lor, \rightarrow, \leftrightarrow \}$. to make inferences. We introduce the Principles
                        of Extensionality $ \exists $ and Universality $ \forall $, to simplify our pursuit for more descriptive models of theories.
                    </p>
                    
                    <h3>Adequately Expressive</h3>

                    <h3>Intended Interpretation</h3>

                    
                    <p>
                        Below we will try to descibe a situation in which each of the ideas discussed above are relevant or applicable in mathematics and related domains of science.
                    </p>
                    
                    <p>
                        In Probability Theory we can take advantage of concepts such as <i>sets</i> to better express our statements in first-order-theoretic terms.
                        Thus, if read out loud, as is intended to be, we often talk about "containment of an element" and all the other usual concpets of logical grammar
                        known collectively as <i>syntax</i>
                    </p>
                    
                    <p>
                        It is recorded throughout the books of history that Sherlock Holmes himself once proclaimed that "if we eliminate the impossible, however improbable,
                        what remains must be the truth". It is this very statement that lends itself to the Law of Excluded Middle.
                    </p>
                    
                    <p>
                        Law of the Excluded Middle is appropriately name since it establishes that there is no in between, when it comes to "right" or "wrong"
                    </p>

                </div>

                <h3>Tautology</h3>

                <h3>
                    Many People wonder why David Hilbert was considered as one of the many influential figures during his lifetimee?
                </h3>

                <p>
                    Reason 1
                </p>
                <p>
                    Reason 2
                </p>
                <p>
                    Reason 3
                </p>
                <p>
                    Reason 4
                </p>
                <p>
                    Reason 5
                </p>

                <h3>
                    Frames of Calculus
                </h3>

                <h3> Questions? </h3>

                <br>

                What is an Axiom?
                <br>
                What is a Theorem

                <br>

                <div class="section">
                    
                    <h3> Baby Logic </h3>
                    
                    $ A \cup X \setminus A $
                    
                    <p> 
                        Mathematical language is expressed in a complex, but very precise way which is similar to any other 
                        natural language. Mathematics, at its core, relies on ‘ordinary’ language and logic, integrated with a 
                        wide range of precisely-defined conventions, notations, symbols, graphical and abstract 
                        representations and operations described by special conjunctions and detailed phrases.
                        Mathematics, like English, is a language, however more sophisticated. All languages have an alphabet, 
                        which is a group of letters that are used to make words. Words are then used to make phrases and so 
                        forth. There are also rules of grammar which explain how words are joined together. Punctuation, like 
                        brackets, braces, square brackets, parenthesis, footscripts and superscripts, commas are further used to clarify meaning and understanding (ORR & AND)
                        (Schutte, 2003: 185).
                        
                        <br>
                        <br>
                        
                        Mathematics, more specifically, is the language of science (more abstractly, the language of ideas).
                        Like any language, Mathematics also has letters (which include numbers and variables) that are used
                        as coefficients and indices (superscripts and subscripts) which constitute terms (sort of like 
                        morphemes) which in turn make up expressions and phrases when combined with punctuation
                        thought of as operators: $+$, $−$, $\times$, $\div$.
                        
                        <br>
                        <br>
                        
                        Together with relations (‘equal’, ‘less than’ and ‘greater than’), these expressions are placed in perspective to one another,
                        analogous to sentences, questions as well as “simile” or "comparisons". There are also conjunction schemas such as:

                        <br>
                        <br>
                        <br>
                        
                        <h2>Logical Negation / Set Minus Operation</h2>
                        
                        
                        
                        "A picture is worth a thousand words"
                        
                        <br>
                        <br>
                        
                        <br>
                        <br>

                        &nbsp; $\qquad \qquad \qquad \qquad $ $\phi$ [premise] = T $\qquad \qquad \qquad \qquad $ if and only if $\qquad \qquad \qquad \qquad$ $\neg$ &nbsp; $\phi$ [premise] = F
                        
                        <br>
                        <br>
                        
                        <h4>Linguistic cultures</h4>
                        
                        <p> In natural speech, you would likely try and understand connetives based on your interpretation of them. Generally,
                            
                            being guided by your intuition seems to be an interesting phenomenon, that we as modern humans have not yet been able
                            
                            to fully uncover the mysteries of so as to be able to successfully encode intuition into intelligent machines.
                            
                            It is a complex phenomena that requires a litle bit more than recursion theory to explain.
                            
                            <br>
                            
                            The Lambda Calculus is probably a good place to start if one would like to understand how
                            
                            the first computers were being encoded it's basic operations on a "Low Level"
                            
                            The foundations for each logical operator and all arithmetic operations on a machine as
                            
                            well as it's integer operations from which more complex procedures may be derived such as our ability to integrate "typing" through the invention of perhipherals such as mouse, keyboard, display, interface.
                            
                            Together with mini subroutines/Macro/Class/A_Set_of_Functions
                            
                            imlplemented to define a new computer language that machines are capable of executing as a set of instructions.
                            The first useful such language is called Assembly and is an interesting concept that is described as a set of binary
                            digits being "ON" or "OFF" based on modulo 2 arithmetic to better utilized the algorithmic nature of machinees.
                            
                            Our "best guess" is usually quite good but never good enough if we can't prove our results.
                            We now define some of the most basic laws of Arithmetic and Induction.
                        </p>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        <h2>Implication Connective</h2>
                            
                        [condition] $\rightarrow$ [conclusion]
                        
                        <br>
                        <br>

                        if (@) then (#)

                        <br>
                        <br>

                        (@) $\rightarrow$ (#)

                        <br>
                        <br>
                        
                        <br>
                        <br>
                        <br>
                        
                        <h2>Bidirectional Connective</h2>
                            
                        <br>
                        
                        [condition] $\leftrightarrow$ [conclusion])

                        <br>
                        <br>

                        (@) if and only if (#)
                        
                        <br>
                        <br>

                        (@) $\leftrightarrow$ (#)
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        \neg 
                        
                        <br>
                        
                        , “or” as well as “and” which are used to impose additional criteria.
                        (abbreviated ‘iff’), “or” as well as “and” which are used to impose additional criteria.
                        
                        <br>
                        
                        More concisely, the Grammar of Mathematics describes the order in which operations may be 
                        performed, how expressions may be manipulated, and generally governs logical validity.
                
                        <br>
                        <br>
                        
                        <br>
                        <br>
                        
                        Conjunctions
                        
                        <br>
                        <br>
                        
                        In English there are more than one way in which words, phrases and expressions can be joined 
                        together. This is achieved by using conjunction words. Conjunction words that are commonly used to 
                        join sentences include “and”, “but”, “although”, “while”, “unless”, “after”, “because”, “therefore”, 
                        etc. Conjunctions merge words and phrases into a single expression. Depending on the conjunction 
                        used, it can determine condition, combination or generally coordinate the meaning of phrases. This is 
                        also true for Mathematics. When two terms are joined, they are often written as
                        ' x + 2', where addition symbolizes a conjunction. In Mathematics, conjunctions are often referred to as ‘operators’. 
                        There are other conjunctions in Mathematics that are less obvious, such as the implication, ‘if’ and 
                        ‘then’. They are generally used in the following way:
                        If π is irrational, then it cannot be expressed as a fraction.
                        There are also operators in Mathematics that do not behave as conjunctions in natural language, such 
                        as Radicals:
                        can serve as an operator, but cannot act as a conjunction in the sense of the examples described.
                        Generally, this analogy is but a rule of thumb to better interpret the language of Mathematics.
                        Expressions
                        An expression in Mathematics is analogous to phrases, clauses or expressions in English such as “An 
                        arm and a leg” or “it takes two to tango” in a way that more than one ‘term’ or ‘word’ is joined together 
                        for enhancing and formalizing Syntax and Semantics while describing a combination of ideas.
                        Semantics
                        Semantics is the linguistic and philosophical study of meaning. A bunch of symbols that are grouped 
                        together doesn’t necessarily make a sentence. For example, the following string of characters:
                        “My! running & every? focus very, (and”
                        conveys no meaning. In fact, it is rather nonsensical and completely confusing to the reader. Hence, 
                        certain criteria govern how symbols and words can and cannot be compiled to synthesise meaning. In 
                        the essence of Mathematics, it is pointless to write
                        " ( 4 "
                        3
                        x + y − +  . It is exaggeratingly ridiculous
                        to utter symbols in an uncontrolled fashion.
                        Syntax
                        Syntax refers to the order and way in which words and symbols can be joined together while 
                        preserving meaning. The best way to describe this is to consider comparative syntactic usage:
                        “Maurice says he wants to paint only the kitchen “
                        “Maurice says he wants only to paint the kitchen”
                        “Only Maurice says he wants to paint the kitchen”
                        Each of the sentences above contain the same word elements but convey completely different 
                        meaning, due to the variation in syntactical usage of the word ‘only’.
                        In Mathematics, syntax works a little different, sometimes it is true that the order in which expressions 
                        are joined doesn’t matter, other times it is of equal importance that the order is specific. Simple 
                        examples include:
                        In Mathematics, 2+3 is the same as 3+2, however 2-3 is not the same as 3-2. This is due to the Syntactic 
                        Nature of the Operation.
                        Questions and Simile
                        In spoken language, the fluency of communication depends on the verbal ability to exchange abstract
                        ideas effectively and recognizably. Debating requires give-and-take of thought through comparison 
                        and clarification. A listener is often required to ask a specific question when in doubt or uncertain of 
                        a matter or inconceivable argument.
                        Simile
                        In ordinary language a Simile is a figure of speech which is used to express resemblance, especially to 
                        establish a deep relation between an abstract concept (usually emotions which are hard to describe) 
                        and a physically comprehensible and conventional idea to ease or eradicate difficulty of 
                        understanding. An examples is “bad jokes are like flat soda” which aims at comparing poor humour to 
                        an untasteful beverage.
                        This carries over in Mathematics as Equations and Inequalities. Equations and Inequalities infer a 
                        relationship between expressions. An expression of some sort might be outweighed by another, in the 
                        sense that it is a stronger expression than the one to which it is compared. A simple example is:
                        x −1  2 x −1
                        is strictly less than 
                        2 2
                        is strictly greater than 
                        x −1
                        x  2x − 5 x
                        is greater or equal to 
                        2x − 5 2x − 5
                        is less than or equal to 
                        5
                        x  y x
                        is not equal to 
                        y y
                        is not equal to 
                        x
                        r
                        F
                        1
                         F
                        is inversely proportional to 
                        r r
                        is inversely proportional to 
                        F
                        Questions
                        Learning a new language might expect of you to deduce or simply request clarification; “what is the 
                        meaning of …?” anticipating a simple response in satisfying inadequate understanding.
                        Correspondingly, Mathematics asks questions which require clarification. Equations are parallel to 
                        questions. Consider the following simple equation:
                        x −1 = 0
                        What is suggested In Mathematical symbols can be reinterpreted as a question that asks “what value 
                        of 
                        x
                        satisfies the equation?”
                        Mathematics places great emphasis on the ability to write clearly and concisely and above all, 
                        unambiguously. It resembles abstraction of physical quantities and concepts. Roughly speaking, 
                        Mathematical Notation helps to condense everyday language and thought into powerful symbols that 
                        can be readily manipulated.

                        “Reasoning relies on establishing the truth of statements, which can then be used to build up a chain 
                        of thought leading to a conclusion. This might seem obvious to us now, but the idea of constructing a 
                        rational argument distinguishes philosophy from the superstitious and religious explanations that had 
                        existed before the first philosophers. These thinkers had to devise a way of ensuring their ideas had 
                        validity. What emerged from their thinking was logic, a technique of reasoning that was gradually 
                        refined over time. At first, simply a useful tool for analysing whether an argument held water, logic 
                        developed rules and conventions, and soon became a field of study in its own right, another branch 
                        of the expanding subject of philosophy. Like so much of philosophy, logic has intimate connections 
                        with science, mathematics and computer science in particular. The basic structure of a logical 
                        argument, starting from a premise and working through a series of steps to a conclusion, is the same 
                        as that of a mathematical proof. It’s not surprising then that philosophers have often turned to 
                        mathematics for examples of self-evident, incontrovertible truths, nor that many of the greatest 
                        thinkers, from Pythagoras to René Descartes and Gottfried Leibniz, were also accomplished 
                        mathematicians. Although logic might seem to be the most exact and “scientific” branch of 
                        philosophy, a field where things are either right or wrong, a closer look at the subject shows that it is 
                        not so simple. Advances in mathematics in the 19th century called into question the rules of logic that 
                        had been laid down by Aristotle, but even in ancient times, Zeno of Elea’s (c. 460 BC) famous 
                        paradoxes, reached absurd conclusions from apparently faultless arguments. A large part of the 
                        problem is that philosophical logic, unlike mathematics, is expressed in words rather than numbers or 
                        symbols, and is subject to all the ambiguities and subtleties inherent in language. Constructing a 
                        reasoned argument involves using language carefully and accurately, examining our statements and 
                        arguments to make sure they mean what we think they mean; and when we study other people’s 
                        arguments, we have to analyse not only the logical steps they take, but also the language they use, to 
                        see if their conclusions hold water.” (Buckingham et al, 2011: 13-14)
                        Riddles
                        A riddle is a type of question posed in a complex way anticipating a clever response. Riddles are 
                        problems that can be solved by means of logical arguments. The word riddle is derived from the same 
                        root as ‘rider’ (often used in Geometry) which refers to a Mathematical Problem.
                        The following are examples of Riddles:
                        1) A girl was 10 on her last birthday and will be twelve on her next birthday. How is this possible?
                        2) Two fathers and two sons go fishing. They each catch a fish for the day. They bring home three 
                        fishes. How is that possible?
                        3) A father and his son were driving down the road. The car crashed into a tree and the father 
                        died. The boy was rushed to hospital where he was prepared for emergency surgery. On
                        entering the surgery suite, the surgeon said “I cannot operate on this boy. He is my son” How 
                        is this possible?
                        4) In a father’s Will, he states that his sons must race their horses for inheritance. “The son with 
                        the slowest horse will receive my entire fortune”. The two sons race but never finish, as they 
                        deliberately slow their horses. After visiting an Oracle, the sons race their horses as fast as 
                        possible. What did the Oracle tell them?
                        Solutions:
                        1) It is currently the girl’s birthday
                        2) A grandfather, his son and his grandson each caught a fish
                        3) The surgeon is the boy’s mother
                        4) The Oracle told them to swap horses
                        Paradox
                        A paradox is a statement that, despite apparent sound reasoning from true premises, leads to a selfcontradictory or a logical inconsistent conclusion. 
                        Are the following statements true or false?
                        1) “I’m a compulsive liar”
                        2) “The following sentence is true
                         The previous sentence is false”
                        The statements above are inconclusive. It is impossible to determine whether they are true or false. 
                        This illustrates a form of circular reasoning. These type of statements are called paradoxes. There are 
                        also other paradoxes which are indicative of the limitations of our tangible realm. Zeno of Elea’s 
                        famous Paradoxes include Achilles and the Tortoise and the Arrow and indicate the restrictive 
                        capabilities of our mind to comprehend the physical world. Only with the recent development of 
                        Quantum Physics, these paradoxes are starting to unravel.
                        Achilles and the Tortoise
                        Consider the diagram:
                        Figure 1.1
                        Assume that space and time is infinitely divisible. If Achilles is at A and the tortoise is at B, then Achilles 
                        can never catch the tortoise, since by the time Achilles reaches B, the tortoise will be at some further 
                        point C, and by the time Achilles reaches C, the tortoise will be further ahead at D, and so on ad 
                        infinitum: the tortoise will always be ahead.
                        Arrow
                        Assume space and time are not infinitely divisible. Hence, there is an indivisible smallest unit of space 
                        (a point) and an indivisible smallest unit of time (an instant). If you shoot an arrow using a bow, the 
                        arrow must be at a given point at a given instant. Since the arrow cannot be in two places in the same 
                        instant, it cannot move in that instant, so it remains in that instant, therefore the arrow is stationary.
                        The dilemma:
                        The assumption from Achilles and the Tortoise and the Arrow lead to absurd conclusions and 
                        contradict common sense, therefore they are paradoxical. (Haggarty, 1993:3)
                        Statement
                        A sentence that can be labelled true or false, is a statement. Several statements can be combined to 
                        produce a larger composite statement (Haggarty, 1993:19).
                        Universal Statement
                        A certain property is true for all elements in a set
                        Example: All positive numbers are greater than zero
                        Conditional Statement
                        If one thing is true, then some other thing is also true
                        Example: if 378 is divisible by 18, then 378 is divisible by 3 (since 18 is divisible by 3)
                        Existential Statement
                        Given a property that may or may not be true, there is at least one thing for which the property is true
                        Example: There is a prime number that is even (2)
                        (Epp, 2010:2)
                        Predicate
                        The most basic statement about something
                        A property inherent to an element
                        Example: apples are red (red-ness is predicated upon apples) – True or False
                        Premise
                        A proposition supporting or helping to support a conclusion.
                        An assumption that a statement is true.
                        A basis, stated or assumed, on which reasoning proceeds.
                        “All men are mortal” is true
                        “Socrates is a man” is true
                        Hypothesis
                        This is a conditional statement arising from a combination of a premise and a conclusion by using the 
                        conjunctives “if” and “then” in a logical way and is written in the following way:
                        If P, then Q
                        P is called the antecedent (Conditional Clause)
                        Q is called the consequence (Result/Conclusion Clause)
                        Postulate/Axiom
                        The two words, Postulate and Axiom, mean the same thing but are used in disjoint historical settings. 
                        This is a supposition from which a theory is built and does not need to be proved. A Postulate/Axiom 
                        is a statement that we assume to be true, so that more results follow. “Postulate” is mostly used in 
                        Geometry and Physics whereas “Axiom” is mostly used in Algebra and Mathematics.
                        Example: The Tangent Line of a Circle is Perpendicular to the Radius of the Circle (Accepted as Truth)
                        Example: Lines that are not parallel, cut in exactly one point (Accepted as Truth – Cannot Prove this)
                        Definition
                        Description or Explanation of a concept. A defined concept might reveal useful in simplifying or 
                        understanding a Theory
                        Example: A Point is a (Geometrical) object with no Dimensions
                        Theory
                        This is a system of Postulates/Axioms and Definitions that, when combined, produce more insightful 
                        results. These results are called Theorems. (A powerful set of choice of Postulates/Axioms)
                        Example: Euclidean Geometry
                        Theorem
                        An interesting result that has been proved by a combination of Postulates/Axioms and Definitions.
                        Example: Tangent Lines intersecting at a Point, are Congruent
                        Conjecture
                        A yet to be proved Theorem. An unproved Theorem is called a Corollary
                        Corollary
                        This is a statement that follows easily from a previous statement. Often a special case of a Theorem,
                        forms a Corollary
                        Example
                        Theorem: The angle subtended at the centre of a circle is double the angle at the circumference
                        Corollary: The diameter subtends a right angled triangle at the circumference
                        Lemma
                        This can be considered as a “Helping Theorem” or “Minor Theorem”, used as a stepping stone to a 
                        larger result rather than as a statement of interest itself
                        Statement Relationships
                        Statements can be expressed in various forms. These different forms of a statement can reveal 
                        important information about the original statement, or serve as a technique to prove otherwise 
                        impossible or complicated statements.
                        Given a Hypothesis, “if P, then Q”, we can create three related statements
                        Statement If P, then Q
                        Converse If Q, then P
                        Negation/Inverse If not P, then not Q
                        Contrapositive If not Q, then not P
                        The Contrapositive of a statement is the Converse of the Negation of the statement
                        Examples: Consider the two Statements below
                        S: if P, then Q T: if R, then Q
                        P: (you eat MacDonald’s)
                        R: (you eat KFC)
                        Q: (you are Fat)
                        S: If (you eat MacDonald’s), then (you will become Fat)
                        T: if (you eat KFC), then (you will become Fat)
                        Similar Statements:
                        S and T are similar Statements, since the conclusion Q is the same:
                        We write this mathematically as 𝑆~𝑇
                        If (you eat MacDonald’s), then (you will become Fat) ~ If (you eat KFC), then (you will become Fat)
                        Converse:
                        (Converse): if Q, then P
                        If (you are Fat), then (you have eaten to much MacDonald’s)
                        Negation/Inverse:
                        If not P, then not Q
                        If (you haven’t eaten too much MacDonald’s), then (you are not Fat)
                        Contrapositive:
                        If not Q, then not P
                        If (you are not Fat), then (you have not eaten too much MacDonald’s)
                        If a Statement is true, then the Contrapositive is also true
                        If the Converse of a Statement is true, then the Negation of that Statement is also true
                        If a Statement is true, the Converse is not necessarily true, since alternative Statements can be made 
                        which are equally true due to Similarity of Statements
                        Example:
                        Statement If a Quadrilateral is a Rectangle, then it has two 
                        pairs of Parallel Sides
                        Converse If a Quadrilateral has two pairs of Parallel Sides, 
                        then it is a Rectangle (FALSE)
                        Negation/Inverse If a Quadrilateral is not a Rectangle, then it does 
                        not have two pairs of Parallel Sides (FALSE)
                        Contrapositive If a Quadrilateral does not have two pairs of 
                        Parallel Sides, then it is not a Rectangle
                        Methods/Techniques of Proof
                        Sometimes, a statement is simple, sometimes it is complex. But whether a statement is 
                        straightforward or complicated, it can only be accepted as true if it is proven. If you are uncertain 
                        about a certain fact, it is in your best interest to do research and gather enough information from 
                        which you can draw a conclusion. This will give you the feeling of “belied” and “understanding” of an
                        argument. The method of arriving at this “belief” is called Proof and the “understanding” is the 
                        derivation of such a fact.
                        Proof
                        A Proof is a sequence or list of statements (Axioms/Postulates and Definitions) that lead to the 
                        establishment of the truth of a conclusion. (Tapson, 2006:65).
                        Validity of Proof
                        A Mathematical Proof can be “correct” or “incorrect”. The “correctness” of a Proof depends on “the 
                        Validity” of the steps taken, leading to the final argument.
                        Direct Proof
                        This is a Proof in which all the statements used are true in its natural order or straight forward way,
                        and all arguments are Valid. Sadly, this is the only technique explored in High Schools of South Africa
                        Proof by Contradiction/Reductio ad Absurdum/Indirect Proof
                        This is a Proof in which one assumption is made in such a way that, using valid arguments, a false 
                        conclusion is arrived at, which contradicts the assumption, inferring the opposite of the assumption is 
                        true.
                        Proof by Exhaustion
                        This is a technique which can only be used for restricted conditions. It entails justification of each 
                        particular case of a statement, which is established by working through every possible case, and 
                        finding no contradictions, eliminating impossibilities.
                        Proof by Induction
                        This is a technique that shows that if one particular case is true, then so is the next case. From this 
                        action, it follows that all cases are true.
                        How to formalize a Proof
                        A Formal Proof is a step-by-step argument in which each statement is logically valid and in which each 
                        statement in aim of the Conclusion is accompanied by a Reason
                        The Statement is written on the Left Hand Side of the page and the accompanying Reason is written 
                        on the Right Hand Side of the Page in the same line as the Statement which it supports
                        To round off a Proof, the Conclusion of the Proof is expressed explicitly, followed by Q.E.D.
                        Q.E.D. is an abbreviation of the Latin Phrase “Quod erat Demonstrandum” which means “what was to 
                        be demonstrated” and is an elegant formalization to finalize a Mathematical Proof
                        References
                        Buckingham, et al. 2011. The Philosophy Book. Dorling Kindersley Limited, London.
                        Haggarty, R. 1993. Fundamentals of Mathematical Analysis (Second Edition). Prentice Hall, England.
                        Orr, MH. & Schutte CJH. 2003. The Language of Science. John Povey Press, Pretoria.
                        Tapson, F. 2006. The Oxford Mathematics Study Dictionary. Oxford University Press, Oxford
                        
                        
                        
                        
                        
                        
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        The Turing machine mathematically models a machine that mechanically operates on a tape. On this tape are symbols, which the machine can read and write, one at a time, using a tape head. Operation is fully determined by a finite set of elementary instructions such as "in state 42, if the symbol seen is 0, write a 1
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                        A Turing machine is a mathematical model of computation describing an abstract machine[1] that manipulates symbols on a strip of tape according to a table of rules.[2] Despite the model's simplicity, it is capable of implementing any computer algorithm.[3]

                        The machine operates on an infinite[4] memory tape divided into discrete cells,[5] each of which can hold a single symbol drawn from a finite set of symbols called the alphabet of the machine. It has a "head" that, at any point in the machine's operation, is positioned over one of these cells, and a "state" selected from a finite set of states. At each step of its operation, the head reads the symbol in its cell. Then, based on the symbol and the machine's own present state, the machine writes a symbol into the same cell, and moves the head one step to the left or the right,[6] or halts the computation. The choice of which replacement symbol to write and which direction to move is based on a finite table that specifies what to do for each combination of the current state and the symbol that is read.
                        
                        The Turing machine was invented in 1936 by Alan Turing,[7][8] who called it an "a-machine" (automatic machine).[9] It was Turing's Doctoral advisor, Alonzo Church, who later coined the term "Turing machine" in a review.[10] With this model, Turing was able to answer two questions in the negative:
                        
                        Does a machine exist that can determine whether any arbitrary machine on its tape is "circular" (e.g., freezes, or fails to continue its computational task)?
                        Does a machine exist that can determine whether any arbitrary machine on its tape ever prints a given symbol?[11][12]
                        Thus by providing a mathematical description of a very simple device capable of arbitrary computations, he was able to prove properties of computation in general—and in particular, the uncomputability of the Entscheidungsproblem ('decision problem').[13]
                        
                        Turing machines proved the existence of fundamental limitations on the power of mechanical computation.[14] While they can express arbitrary computations, their minimalist design makes them unsuitable for computation in practice: real-world computers are based on different designs that, unlike Turing machines, use random-access memory.
                        
                        Turing completeness is the ability for a system of instructions to simulate a Turing machine. A programming language that is Turing complete is theoretically capable of expressing all tasks accomplishable by computers; nearly all programming languages are Turing complete if the limitations of finite memory are ignored.
                        
                        More explicitly, a Turing machine consists of:

                        A tape divided into cells, one next to the other. Each cell contains a symbol from some finite alphabet. The alphabet contains a special blank symbol (here written as '0') and one or more other symbols. The tape is assumed to be arbitrarily extendable to the left and to the right, so that the Turing machine is always supplied with as much tape as it needs for its computation. Cells that have not been written before are assumed to be filled with the blank symbol. In some models the tape has a left end marked with a special symbol; the tape extends or is indefinitely extensible to the right.
                        A head that can read and write symbols on the tape and move the tape left and right one (and only one) cell at a time. In some models the head moves and the tape is stationary.
                        A state register that stores the state of the Turing machine, one of finitely many. Among these is the special start state with which the state register is initialized. These states, writes Turing, replace the "state of mind" a person performing computations would ordinarily be in.
                        A finite table[17] of instructions[18] that, given the state(qi) the machine is currently in and the symbol(aj) it is reading on the tape (symbol currently under the head), tells the machine to do the following in sequence (for the 5-tuple models):
                        Either erase or write a symbol (replacing aj with aj1).
                        Move the head (which is described by dk and can have values: 'L' for one step left or 'R' for one step right or 'N' for staying in the same place).
                        Assume the same or a new state as prescribed (go to state qi1).
                        In the 4-tuple models, erasing or writing a symbol (aj1) and moving the head left or right (dk) are specified as separate instructions. The table tells the machine to (ia) erase or write a symbol or (ib) move the head left or right, and then (ii) assume the same or a new state as prescribed, but not both actions (ia) and (ib) in the same instruction. In some models, if there is no entry in the table for the current combination of symbol and state, then the machine will halt; other models require all entries to be filled.
                        
                        Every part of the machine (i.e. its state, symbol-collections, and used tape at any given time) and its actions (such as printing, erasing and tape motion) is finite, discrete and distinguishable; it is the unlimited amount of tape and runtime that gives it an unbounded amount of storage space.
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                        
                        Formal definition
                        Following Hopcroft & Ullman (1979, p. 148), a (one-tape) Turing machine can be formally defined as a 7-tuple {\displaystyle M=\langle Q,\Gamma ,b,\Sigma ,\delta ,q_{0},F\rangle }M=\langle Q,\Gamma ,b,\Sigma ,\delta ,q_{0},F\rangle  where
                        
                        {\displaystyle \Gamma }\Gamma  is a finite, non-empty set of tape alphabet symbols;
                        {\displaystyle b\in \Gamma }b\in \Gamma  is the blank symbol (the only symbol allowed to occur on the tape infinitely often at any step during the computation);
                        {\displaystyle \Sigma \subseteq \Gamma \setminus \{b\}}\Sigma \subseteq \Gamma \setminus \{b\} is the set of input symbols, that is, the set of symbols allowed to appear in the initial tape contents;
                        {\displaystyle Q}Q is a finite, non-empty set of states;
                        {\displaystyle q_{0}\in Q}q_{0}\in Q is the initial state;
                        {\displaystyle F\subseteq Q}F\subseteq Q is the set of final states or accepting states. The initial tape contents is said to be accepted by {\displaystyle M}M if it eventually halts in a state from {\displaystyle F}F.
                        {\displaystyle \delta :(Q\setminus F)\times \Gamma \not \to Q\times \Gamma \times \{L,R\}}{\displaystyle \delta :(Q\setminus F)\times \Gamma \not \to Q\times \Gamma \times \{L,R\}} is a partial function called the transition function, where L is left shift, R is right shift. If {\displaystyle \delta }\delta  is not defined on the current state and the current tape symbol, then the machine halts;[19] intuitively, the transition function specifies the next state transited from the current state, which symbol to overwrite the current symbol pointed by the head, and the next head movement.
                        
                        3-state Busy Beaver. Black icons represent location and state of head; square colors represent 1s (orange) and 0s (white); time progresses vertically from the top until the HALT state at the bottom.
                        In addition, the Turing machine can also have a reject state to make rejection more explicit. In that case there are three possibilities: accepting, rejecting, and running forever. Another possibility is to regard the final values on the tape as the output. However, if the only output is the final state the machine ends up in (or never halting), the machine can still effectively output a longer string by taking in an integer that tells it which bit of the string to output.
                        
                        A relatively uncommon variant allows "no shift", say N, as a third element of the set of directions {\displaystyle \{L,R\}}\{L,R\}.
                        
                        The 7-tuple for the 3-state busy beaver looks like this (see more about this busy beaver at Turing machine examples):
                        
                        {\displaystyle Q=\{{\mbox{A}},{\mbox{B}},{\mbox{C}},{\mbox{HALT}}\}}Q=\{{\mbox{A}},{\mbox{B}},{\mbox{C}},{\mbox{HALT}}\} (states);
                        {\displaystyle \Gamma =\{0,1\}}\Gamma =\{0,1\} (tape alphabet symbols);
                        {\displaystyle b=0}b=0 (blank symbol);
                        {\displaystyle \Sigma =\{1\}}\Sigma =\{1\} (input symbols);
                        {\displaystyle q_{0}={\mbox{A}}}q_{0}={\mbox{A}} (initial state);
                        {\displaystyle F=\{{\mbox{HALT}}\}}F=\{{\mbox{HALT}}\} (final states);
                        {\displaystyle \delta =}\delta = see state-table below (transition function).
                        Initially all tape cells are marked with {\displaystyle 0}{\displaystyle 0}.
                        
                        State table for 3-state, 2-symbol busy beaver
                        Tape symbol	Current state A	Current state B	Current state C
                        Write symbol	Move tape	Next state	Write symbol	Move tape	Next state	Write symbol	Move tape	Next state
                        0	1	R	B	1	L	A	1	L	B
                        1	1	L	C	1	R	B	1	R	HALT

                        
                    </p>
                    
                </div>
                
                <div class="section">
                    <h3> How to use this Guide </h3>
                    <p> ... </p>
                </div>
                
            </div>

        </div>
    
    </body>
    
</html>