# III - Explorar o funcionamento do browser e da resolução de pedidos HTTP
1. Use o comando curl no terminal para aceder ao appserver-01 usando o porto 80 (HTTP) e use o comando GET do HTTP para ver a sua página – comando numa única linha:
`curl --request GET http://appserver-01.alunos.di.fc.ul.pt:80/~asw21/56926/tp01/ola.html` ou simplesmente `curl http://appserver-01.alunos.di.fc.ul.pt/~asw21/56926/tp01/ola.html`

```bash
curl http://appserver-01.alunos.di.fc.ul.pt/~asw21/56926/tp01/ola.html
<html><h2>Ola Mundo</h2></html>
```

2. Usando as opções –v e –I do comando curl visualize o pedido e a resposta HTTP (neste caso só é mostrado o header da resposta e não o conteúdo HTML):
`curl -I -v http://appserver-01.alunos.di.fc.ul.pt/~asw21/56926/tp01/ola.html`

```bash
curl -I -v http://appserver-01.alunos.di.fc.ul.pt/~asw21/56926/tp01/ola.html                                    
*   Trying 10.101.151.25:80...
* Connected to appserver-01.alunos.di.fc.ul.pt (10.101.151.25) port 80 (#0)
> HEAD /~asw21/56926/tp01/ola.html HTTP/1.1
> Host: appserver-01.alunos.di.fc.ul.pt
> User-Agent: curl/7.81.0
> Accept: */*
> 
* Mark bundle as not supporting multiuse
< HTTP/1.1 200 OK
HTTP/1.1 200 OK
< Date: Mon, 07 Mar 2022 17:59:18 GMT
Date: Mon, 07 Mar 2022 17:59:18 GMT
< Server: Apache/2.4.6 (CentOS) PHP/5.4.16
Server: Apache/2.4.6 (CentOS) PHP/5.4.16
< Last-Modified: Mon, 07 Mar 2022 17:45:31 GMT
Last-Modified: Mon, 07 Mar 2022 17:45:31 GMT
< ETag: "20-5d9a46e49ff6a"
ETag: "20-5d9a46e49ff6a"
< Accept-Ranges: bytes
Accept-Ranges: bytes
< Content-Length: 32
Content-Length: 32
< Connection: close
Connection: close
< Content-Type: text/html; charset=UTF-8
Content-Type: text/html; charset=UTF-8

< 
* Closing connection 0
```

3. Usando comando curl, altere o anterior pedido HTTP de forma a informar (erradamente) o servidor que está a utilizar um smartphone BlackBerry em vez do curl. Verifique a alteração no pedido feito.
`curl -I -v http://appserver-01.alunos.di.fc.ul.pt/~aswNN/MMMMM/tp01/ola.html --user-agent "BlackBerry8100/4.2.1"`

```bash
curl -I -v http://appserver-01.alunos.di.fc.ul.pt/~aswNN/MMMMM/tp01/ola.html --user-agent "BlackBerry8100/4.2.1"
*   Trying 10.101.151.25:80...
* Connected to appserver-01.alunos.di.fc.ul.pt (10.101.151.25) port 80 (#0)
> HEAD /~aswNN/MMMMM/tp01/ola.html HTTP/1.1
> Host: appserver-01.alunos.di.fc.ul.pt
> User-Agent: BlackBerry8100/4.2.1
> Accept: */*
> 
* Mark bundle as not supporting multiuse
< HTTP/1.1 404 Not Found
HTTP/1.1 404 Not Found
< Date: Mon, 07 Mar 2022 17:59:57 GMT
Date: Mon, 07 Mar 2022 17:59:57 GMT
< Server: Apache/2.4.6 (CentOS) PHP/5.4.16
Server: Apache/2.4.6 (CentOS) PHP/5.4.16
< Connection: close
Connection: close
< Content-Type: text/html; charset=iso-8859-1
Content-Type: text/html; charset=iso-8859-1

< 
* Closing connection 0
```

4. Teste o protocolo HTTP com outros sites web. Verifique as diferentes respostas HTTP, por exemplo, 200 OK, 404 Not Found, 302 Moved Permanently, ao aceder a diferentes endereços. Por exemplo:

`http://moddle.fc.ul.pt`
```bash
curl http://moddle.fc.ul.pt
curl: (6) Could not resolve host: moddle.fc.ul.pt
```

`http://moodle.ciencias.ulisboa.pt`
```bash
curl http://moodle.ciencias.ulisboa.pt
<html>
<head><title>301 Moved Permanently</title></head>
<body>
<center><h1>301 Moved Permanently</h1></center>
<hr><center>nginx</center>
</body>
</html>
```

`http://appserver-01.alunos.di.fc.ul.pt/~naoexiste/`
```bash
curl http://appserver-01.alunos.di.fc.ul.pt/~naoexiste/
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL /~naoexiste/ was not found on this server.</p>
</body></html>
```

`http://appserver.di.fc.ul.pt/~aswNN`
```bash
curl http://appserver.di.fc.ul.pt/~aswNN
curl: (6) Could not resolve host: appserver.di.fc.ul.pt
```
OPCIONAL: faça “man curl“ no terminal e explore as várias opções de recuperação e visualização de informação para este comando.

# IV - Criar a sua primeira aplicação web
