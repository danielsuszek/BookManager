{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}My HTML Page Body goes here
    Hello, {$name}!
    {*
    {ksiazka->tytul}
    {ksiazka->opis}
    *}
{/block}