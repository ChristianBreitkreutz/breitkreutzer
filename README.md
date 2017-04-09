# First steps on a fresh server

# setup ansible (localy)
I had Issues with the wellcome message "echo hello" in my .bashrc. and had to remove them.

And with ansible 2.0 there should be a setting

```scp_if_ssh = True```

( On my ubuntu host i had to do this setting on centOS7 without o_O.)
# Run initial setup playbook

```ansible-playbook  -i local_inventory.ini inital.yml```

This will create an 'ansible' folder in you user_home, with some files. Pls. fill in your data. 

# prepare server ( fresh reinstalled )
```export ANSIBLE_HOST_KEY_CHECKING=False && ansible-playbook -i ~/ansible/local_inventory.ini --extra-vars "@~/ansible/localsetup.json" prepareServer.yml --ask-pass -u root```

# Run main playbooks

## install and setup git, commandline tools and some bash stuff
```ansible-playbook --extra-vars "@~/ansible/localsetup.json" -i ~/ansible/local_inventory.ini generalsetup.yml```

## install and setup mysql, php and apache
```ansible-playbook --extra-vars "@~/ansible/lamp.json" -i ~/ansible/local_inventory.ini lamp.yml```

## install mumble
```ansible-playbook --extra-vars "@~/ansible/mumble.json" -i ~/ansible/local_inventory.ini mumble.yml```
