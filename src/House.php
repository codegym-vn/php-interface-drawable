<?php


class House implements Drawable
{
    public function draw()
    {
        print_r("<pre>");
        print_r("            *" . "</br>");
        print_r("           ***" . "</br>");
        print_r("          *****" . "</br>");
        print_r("         *******" . "</br>");
        print_r("        *********" . "</br>");
        print_r("       ***********" . "</br>");
        print_r("      *************" . "</br>");
        print_r("     ***************" . "</br>");
        print_r("       **********" . "</br>");
        print_r("       **********" . "</br>");
        print_r("       **********" . "</br>");
        print_r("       **********" . "</br>");
        print_r("       **********" . "</br>");
        print_r("</pre>");
    }
}