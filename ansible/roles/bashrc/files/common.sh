# tools aliases
function ag() {
  grep -rnw '.' -e "$1"
}
# ls aliases
alias ls='ls --color=auto'
alias ll='ls -lF'
alias la='ls -A'
alias l.='ls -d .* --color=auto'

# cd
alias cd..='cd ..'
alias ..='cd ..'
alias .2='cd ../..'
alias .r='cd /root'
alias .h='cd /home'
if [ -d "/home/$USER/Schreibtisch" ]; then
	alias .d="cd /home/$USER/Schreibtisch"
else
	alias .d="cd /home/$USER/Desktop"
fi


# rests
alias tailf='tail -f -n50'
alias c='clear'
alias ping='ping -c 3'
alias pingg='ping -c 1 www.google.com'
alias df='df -H'
alias ?=pwd

EDITOR=vim

