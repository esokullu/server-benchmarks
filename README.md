# server-benchmarks

Results on a MacBoook wity Intel Core 5 processor:

```
sokullu:ports groups$ python ip_client.py 
Receiving messages...
Received 7888 messages in 1 second(s).
sokullu:ports groups$ python uds_client.py 
Receiving messages...
Received 17444 messages in 1 second(s).
sokullu:ports groups$ python single.py 
Receiving messages...
Received 3475808 messages in 1 second(s).
```

With PHP:
```
sokullu:ports groups$ python ip_client.py 
Receiving messages...
Received 6085 messages in 1 second(s).
```

With PHP - realtime - no libevent
```
sokullu:ports groups$ python ip_client.py 
Receiving messages...
Received 5656 messages in 1 second(s).
```
