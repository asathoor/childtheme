# Child themes

## Hvornår anvendes et childtheme?

Når du får brug for at ændre filer, der med stor sandsynlighed overskrives ved opdatering af dit tema. Hvis du får brug for at redigere filer som:

* style.css
* functions.php

Eller andre af temaets faste filer, så er der en risiko for at de overskrives ved opdatering.

## Hvordan laver vi et childtheme?

Det er relativt enkelt at oprette et childtheme. Du får brug for:

* En style.css som definerer dit child theme i WP.
* En funcitons.php, der indlæser styles mv. fra dit parent theme.
* En herlig screenshot.png, der viser noget om din intension med dit childtheme.

## Hvordan du opbygger et child theme

I mappen med dit child theme skal du placere de filer, som skal ændres. De skal ligge i præcis de samme mapper, som du ser det i parentthemet. Kopierne af filerne fra dit parent theme vil kopien i child themet erstatte filen i parent themet.

Når et tema opdateres bliver filerne i child theme altså ikke overskrevet, og dine ændringer vil bestå.

## Prøv det i Playground

Du kan afprøve dit childtheme i Playground, hvis det afvikles fra denne mappe. 

## Litteratur

Carolina Nymark [Creating theme.json](https://fullsiteediting.com/lessons/creating-theme-json/).