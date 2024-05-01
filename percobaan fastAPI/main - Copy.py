from fastapi import FastAPI                                                                                          # type: ignore

app=FastAPI(title="My First REST API")

@app.get("/items/{item_id}", tags=["Items"], summary="Read item only", description="Read item cooler")
async def read_item(item_id:int):
    return{
        "item_id":item_id,
        "title":"Item title"
    }

