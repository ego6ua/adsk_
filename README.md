## install wordpress

Remember to overwrite your password

```sh
ansible-playbook -i hosts.ini setup_wp.yaml -e DB_PW='123abc!'
```