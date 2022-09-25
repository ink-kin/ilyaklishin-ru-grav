---
title: Как установить браузер Вивальди?
---

===

# Как установить браузер Вивальди?

Лучший способ:

```
echo "echo deb http://repo.vivaldi.com/stable/deb/ stable main > /etc/apt/sources.list.d/vivaldi.list" | sudo sh
curl http://repo.vivaldi.com/stable/linux_signing_key.pub | sudo apt-key add -
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 1397BC53640DB551
sudo apt-get update
sudo apt-get install vivaldi-stable
```

Приемлемый:

```
wget https://downloads.vivaldi.com/stable/vivaldi-stable_amd64.deb
sudo dpkg -i vivaldi-stable_amd64.deb
```

