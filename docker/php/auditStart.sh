#start the audit service
service auditd stop
service auditd start

auditctl -D
auditctl -a always,exit -F arch=b64 -S bind -S connect -S accept -S accept4 -S clone -S close -S creat -S dup -S dup2 -S dup3 -S execve -S exit -S exit_group -S fork -S open -S openat -S rename -S renameat -S unlink -S unlinkat -S vfork -S read -S write -F success=1 -F exe='/usr/local/sbin/php-fpm'
