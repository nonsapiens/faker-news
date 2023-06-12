<?php

namespace Nonsapiens\FakerNews\Faker;

class News extends \Faker\Provider\Text
{
    protected $leaderjobs = [
        "CEO",
        "banker",
        "consultant",
        "doctor",
        "lawyer",
        "policeman",
        "priest",
        "author",
        "journalist",
        "scientist",
        "teacher",
    ];

    protected $celebjobs = [
        "actor",
        "actress",
        "author",
        "celebrity",
        "game show host",
        "instagram influencer",
        "movie star",
        "reality show contestant",
        "singer",
        "tv star",
        "viral sensation",
        "youtube star",
    ];

    protected $leaders = [
        "President",
        "politician",
        "Mayor",
        "Council Member",
        "City leader",

    ];

    protected $animals = [
        "dog",
        "cat",
        "tiger",
        "panda",
        "parrot",
        "duck",
        "fish",
    ];

    protected $groups = [
        "children",
        "doctors",
        "firefighters",
        "heavily obese",
        "journalists",
        "lawyers",
        "pensioners",
        "people",
        "police officers",
        "politicians",
        "programers",
        "scientists",
        "seniors",
        "shop workers",
        "teachers",
        "teenagers",
    ];


    protected $adults = [
        "dad",
        "grandma",
        "grandpa",
        "man",
        "mum",
        "pensioner",
        "woman",
    ];

    protected $children = [
        "baby",
        "boy",
        "child",
        "girl",
        "newborn",
        "teen",
        "toddler",
        "youth",

    ];

    protected $badthings = [
        "cars",
        "computer virus",
        "flu",
        "obesity",
        "smart phones",
        "sugar",
        "increased tax",
        "vaccines",
        "science",
    ];

    protected $goodthings = [
        "cats",
        "coffee",
        "smart phones",
        "dogs",
        "children",
        "local hero",
        "award winning movie",
        "award wining book",
        "hit tv show",
        "top single",
        "best selling children's book",
        "new toy fad",
    ];

    protected $events = [
        "wins lottery",
        "arrested for crime",
        "awarded multi million payout",
        "loses legal case",
        "acquitted",
        "gets married by mistake",
        "caught in embarrassing video",
        "wins international award",
        "gets stuck in tree",
        "chased by dog",
        "kicked out of restaurant",
        "conspired to defraud millions",
        "selected for international team",
        "targeted by online harassment",
        "finds love at last",
        "exhibits local art show",
        "takes to the stage after organizational mix up",
    ];

    protected $headlineFormats = [
        "What's the truth about {{badthing}}?",
        "Are you at risk of {{badthing}}?",
        "Is it worth becoming a {{job}}?",
        "My fears as a leading {{job}}",
        "Search finds missing {{location}} {{child}} safe at home",
        "{{badthing}} scandal: What we know so far",
        "{{celeb}} shares feelings about {{anything}}",
        "{{group}} demand apology after {{location}} {{person}}'s remarks",
        "{{group}} more intelligent than average",
        "{{group}} want to ban {{badthing}}",
        "{{job}} admits hatred of {{badthing}}",
        "{{job}} praises amazing {{group}}",
        "{{leader}} declares war on {{country}}",
        "{{leader}} honours {{group}}",
        "{{leader}} resigns over {{badthing}} scandal",
        "{{location}} author tops readers favourites",
        "{{location}} {{adult}} {{event}}",
        "{{location}} {{adult}} {{event}}",
        "{{location}} {{group}} call for strike",
        "{{location}} {{group}} demand fairer pay",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{person}} admits relationship with {{person}}",
        "{{person}} denies obsession with {{goodthing}}",
        "{{person}} to testify about {{badthing}} scandal",
        "{{person}}: The truth behind the {{badthing}} story",
    ];

    public function person()
    {
        return $this->randomElement(array_merge(
            $this->leaderjobs,
            $this->celebjobs,
            $this->leaders,
            $this->adults
        ));
    }

    public function celeb()
    {
        return $this->randomElement(array_merge(
            $this->celebjobs
        ));
    }

    public function job()
    {
        return $this->randomElement(array_merge(
            $this->leaderjobs,
            $this->celebjobs
        ));
    }

    public function event()
    {
        return $this->randomElement($this->events);
    }

    public function leader()
    {
        return $this->randomElement(array_merge(
            $this->leaders
        ));
    }

    public function adult()
    {
        return $this->randomElement(array_merge(
            $this->adults
        ));
    }

    public function child()
    {
        return $this->randomElement(array_merge(
            $this->children
        ));
    }

    public function group()
    {
        return $this->randomElement(array_merge(
            $this->groups
        ));
    }


    public function goodthing()
    {
        return $this->randomElement(array_merge(
            $this->goodthings,
        ));
    }

    public function badthing()
    {
        return $this->randomElement(array_merge(
            $this->badthings
        ));
    }

    public function anything()
    {
        return $this->randomElement(array_merge(
            $this->goodthings,
            $this->badthings
        ));
    }

    public function location()
    {
        return $this->randomElement([
            $this->generator->city,
            $this->generator->city,
            $this->generator->state,
            $this->generator->country,
        ]);
    }

    public function headline(): string
    {
        $headline = self::randomElement($this->headlineFormats);
        return ucfirst($this->generator->parse($this->generator->parse($headline)));
    }
}