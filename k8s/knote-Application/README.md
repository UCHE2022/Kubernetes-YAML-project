This is a simple kubernetes-based microservices application that will help you to upload an Image with Notes. 
It is designed as a 2 tier architecture (frontend - nodejs and backend - mongodb). 

We can deploy this application in working kubernetes cluster using kubectl commands or using YAML configuration files.

Frontend:

kubectl apply -f knote.yaml

kubectl apply -f knoteLB.yaml

Backend:

kubectl apply -f mongo.yaml

kubectl apply -f mongoLB.yaml
