FROM node:18-alpine AS development

WORKDIR /app

# Installing dependencies
COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build

EXPOSE 8000

# Starting our application
CMD ["npm","start"]