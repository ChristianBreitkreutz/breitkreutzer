# First steps on a fresh server
I hope i don't need this for a while ;-)
## Create Users
* create main user
* add this user to wheel group in order to use sudo

```usermod -a -G wheel <username>```

* create emergency user ( if i break login things with my main user )
* block root login

```vim /etc/ssh/sshd_config```

```PermitRootLogin no```

# setup ssh

## localy 
* create localy a key
```ssh-keygen -t rsa -b 4096 -C "mail@lala.com"```
* copy public key

## on server(as main user):
* go to home folder
* ```mkdir .ssh```
* ```chmod 700 .ssh```
* ```vi .ssh/authorized_keys```
* paste pub-key
* ```chmod 644 .ssh/authorized_keys```

## on server ( as root )

### adapt sshd config
* ```vim /etc/ssh/sshd_config```
* ```RSAAuthentication yes```
* ```PubkeyAuthentication yes```

### sshd reload and boot-settings of service
* ```systemctl reload sshd```
* ```systemctl enable sshd.service```

# setup ansible (localy)
I had Issues with the wellcome message "echo hello" in my .bashrc. and had to remove them.

And with ansible 2.0 there should be a setting

```scp_if_ssh = True```

( On my ubuntu host i had to do this setting on centOS7 without o_O.)
## Run initial setup playbook

```ansible-playbook  -i local_inventory.ini inital.yml```

This will create an 'ansible' folder in you user_home, with some files. Pls. fillin your data. 

# Run main playbooks

## install and setup git, commandline tools and some bash stuff
```ansible-playbook --extra-vars "@~/ansible/localsetup.json" -i ~/ansible/local_inventory.ini generalsetup.yml```

## install and setup mysql, php and apache
```ansible-playbook --extra-vars "@~/ansible/localsetup.json" -i ~/ansible/local_inventory.ini lamp.yml```
