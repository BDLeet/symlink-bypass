#!/usr/bin/env python 
# devilzc0de.org (c) 2012 
import SimpleHTTPServer 
import SocketServer 
import os 
port = 13123 
if __name__=='__main__': 
os.chdir('/') 
Handler = SimpleHTTPServer.SimpleHTTPRequestHandler 
httpd = SocketServer.TCPServer(("", port), Handler) 
print("Now open this server on webbrowser at port : " + str(port)) 
print("example: http://maho.com:" + str(port)) 
httpd.serve_forever()

