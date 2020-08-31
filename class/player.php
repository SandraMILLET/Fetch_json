<?php
class Player
{
    private $id;
    private $nom;
    private $pseudo;
    private $xp;
    private $img;

    public function __construct(
        $nom ='sandra' ,
        $pseudo ='Soara' ,
        $xp = 3000,
        $img = 'img/crow.jpg'
                )
            {
                $this->nom = $nom;
                $this->pseudo = $pseudo;
                $this->xp = $xp;
                $this->img = $img;
            }        

public function id()
{
    return $this->id;
}

public function getNom()
{
    return $this->nom;
}
public function getPseudo()
{
    return $this->pseudo;
}
public function getXp()
{
    return $this->xp;
}
public function getImg()
{
    return $this->img;
}
public function SetId($id)
{
    $id = $id;
}
public function SetNom($nom)
{
    $nom = $nom;
}
public function SetPseudo($pseudo)
{
    $pseudo = $pseudo;
}
public function Setxp($xp)
{
    $xp = $xp;
}
public function SetImg($img)
{
    $img = $img;
}
}
